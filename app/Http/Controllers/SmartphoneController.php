<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSmartphoneRequest;
use App\Http\Requests\UpdateSmartphoneRequest;
use App\Repositories\SmartphoneRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use App\Models\Brand;
use \App\Models\Smartphone;

class SmartphoneController extends AppBaseController {
    /** @var  SmartphoneRepository */
    private $smartphoneRepository;

    public function __construct( SmartphoneRepository $smartphoneRepo ) {
        $this->smartphoneRepository = $smartphoneRepo;
    }

    public function getSmartphone( $brand, $slug ) {
        $smartphone = Smartphone::where( 'slug', $slug )->first();
        // $smartphone[ '' ]
        return view( 'smartphones.smartphone' )
            ->with( 'smartphone', $smartphone );
    }

    /**
     * Display a listing of the Smartphone.
     *
     * @param Request $request
     * @return Response
     */
    public function index( Request $request ) {
        $this->smartphoneRepository->pushCriteria( new RequestCriteria( $request ) );
        $smartphones = $this->smartphoneRepository->all();

        return view( 'smartphones.index' )
            ->with( 'smartphones', $smartphones );
    }

    
    /**
     * Display a listing of the Smartphone.
     *
     * @param Request $request
     * @return Response
     */
    public function getAllSmartphones( Request $request ) {
        $this->smartphoneRepository->pushCriteria( new RequestCriteria( $request ) );
        $smartphones = $this->smartphoneRepository->all();

        return view( 'smartphones.all-smartphones' )
            ->with( 'smartphones', $smartphones );
    }

    /**
     * Show the form for creating a new Smartphone.
     *
     * @return Response
     */
    public function create() {
        $brands = Brand::pluck( 'name', 'id' ); //Added to select smartphone
        return view( 'smartphones.create' )
            ->with( 'brands', $brands );;
    }

    /**
     * Store a newly created Smartphone in storage.
     *
     * @param CreateSmartphoneRequest $request
     *
     * @return Response
     */
    public function store( CreateSmartphoneRequest $request ) {
        try{
            if ( $request->hasFile( 'product_image' ) && $request->file( 'product_image' )->isValid() ) {
                $originalName = $request->file( 'product_image' )->getClientOriginalName();
                $nameWithoutSpace = preg_replace( '/\s+/', '-', $originalName );
                $month = date('F-Y');
                $path = $request->file( 'product_image' )->storeAs( $month, $nameWithoutSpace, 'public' );
                $input = $request->all();
                $input[ 'product_image' ] = 'storage/' . $path;
                Brand::setCountSmartphone();
                $smartphone = $this->smartphoneRepository->create( $input );
                $message = "Smartphone saved successfully.";
            }else{
                $message = "Smartphone don't saved.";
            }
           
        } catch ( Exception $e ) {
            $e->getMessage();
            $message = "Error " . $e->getMessage(); 
        }

        Flash::success( $message );

        return redirect( route( 'smartphones.index' ) );
    }

    /**
     * Display the specified Smartphone.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show( $id ) {
        $smartphone = $this->smartphoneRepository->findWithoutFail( $id );

        if ( empty( $smartphone ) ) {
            Flash::error( 'Smartphone not found' );

            return redirect( route( 'smartphones.index' ) );
        }

        return view( 'smartphones.show' )->with( 'smartphone', $smartphone );
    }

    /**
     * Show the form for editing the specified Smartphone.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit( $id ) {
        $smartphone = $this->smartphoneRepository->findWithoutFail( $id );

        if ( empty( $smartphone ) ) {
            Flash::error( 'Smartphone not found' );

            return redirect( route( 'smartphones.index' ) );
        }

        return view( 'smartphones.edit' )->with( 'smartphone', $smartphone );
    }

    /**
     * Update the specified Smartphone in storage.
     *
     * @param  int              $id
     * @param UpdateSmartphoneRequest $request
     *
     * @return Response
     */
    public function update( $id, UpdateSmartphoneRequest $request ) {
        $smartphone = $this->smartphoneRepository->findWithoutFail( $id );

        if ( empty( $smartphone ) ) {
            Flash::error( 'Smartphone not found' );

            return redirect( route( 'smartphones.index' ) );
        }

        try{
            if ( $request->hasFile( 'logo' ) && $request->file( 'logo' )->isValid() ) {
                $originalName = $request->file( 'logo' )->getClientOriginalName();
                $nameWithoutSpace = preg_replace( '/\s+/', '-', $originalName );
                $month = date('F-Y');
                $path = $request->file( 'logo' )->storeAs( $month, $nameWithoutSpace, 'public' );
                $input = $request->all();
                $input[ 'logo' ] = 'storage/' . $path;
                $smartphone = $this->smartphoneRepository->update( $input, $id );
                $message = "Smartphone saved successfully.";
            }
           
        } catch ( Exception $e ) {
            $e->getMessage();
            $message = "Error " . $e->getMessage(); 
        }

        Flash::success( $message );

        return redirect( route( 'smartphones.index' ) );
    }

    /**
     * Remove the specified Smartphone from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy( $id ) {
        $smartphone = $this->smartphoneRepository->findWithoutFail( $id );

        if ( empty( $smartphone ) ) {
            Flash::error( 'Smartphone not found' );

            return redirect( route( 'smartphones.index' ) );
        }

        $this->smartphoneRepository->delete( $id );

        Flash::success( 'Smartphone deleted successfully.' );

        return redirect( route( 'smartphones.index' ) );
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
