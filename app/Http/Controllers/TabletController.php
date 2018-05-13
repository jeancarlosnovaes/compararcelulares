<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTabletRequest;
use App\Http\Requests\UpdateTabletRequest;
use App\Repositories\TabletRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use App\Models\Brand;

class TabletController extends AppBaseController {
    /** @var  TabletRepository */
    private $tabletRepository;

    public function __construct( TabletRepository $tabletRepo ) {
        $this->tabletRepository = $tabletRepo;
    }

    public function getTablet( $id ) {
        return Tablet::where( 'id', $id );
    }

    /**
     * Display a listing of the Tablet.
     *
     * @param Request $request
     * @return Response
     */
    public function index( Request $request ) {
        $this->tabletRepository->pushCriteria( new RequestCriteria( $request ) );
        $tablets = $this->tabletRepository->all();

        return view( 'tablets.index' )
            ->with( 'tablets', $tablets );
    }

    /**
     * Display a listing of the Tablet.
     *
     * @param Request $request
     * @return Response
     */
    public function getAllTablets( Request $request ) {
        $this->tabletRepository->pushCriteria( new RequestCriteria( $request ) );
        $tablets = $this->tabletRepository->paginate(20);

        return view( 'tablets.tablet' )
            ->with( 'tablets', $tablets );
    }


    /**
     * Show the form for creating a new Tablet.
     *
     * @return Response
     */
    public function create() {
        $brands = Brand::pluck( 'name', 'id' ); //Added to select tablet
        return view( 'tablets.create' )
            ->with( 'brands', $brands );
    }

    /**
     * Store a newly created Tablet in storage.
     *
     * @param CreateTabletRequest $request
     *
     * @return Response
     */
    public function store( CreateTabletRequest $request ) {
        try{
            if ( $request->hasFile( 'image' ) && $request->file( 'image' )->isValid() ) {
                $originalName = $request->file( 'image' )->getClientOriginalName();
                $nameWithoutSpace = preg_replace( '/\s+/', '-', $originalName );
                $month = date('F-Y');
                $path = $request->file( 'image' )->storeAs( $month, $nameWithoutSpace, 'public' );
                $input = $request->all();
                $input[ 'image' ] = 'storage/' . $path;
                $tablet = $this->tabletRepository->create( $input );
                $message = "Tablet saved successfully.";
            }
           
        } catch ( Exception $e ) {
            $e->getMessage();
            $message = "Error " . $e->getMessage(); 
        }

        Flash::success( $message );

        return redirect( route( 'tablets.index' ) );
    }

    /**
     * Display the specified Tablet.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show( $id ) {
        $tablet = $this->tabletRepository->findWithoutFail( $id );

        if ( empty( $tablet ) ) {
            Flash::error( 'Tablet not found' );

            return redirect( route( 'tablets.index' ) );
        }

        return view( 'tablets.show' )->with( 'tablet', $tablet );
    }

    /**
     * Show the form for editing the specified Tablet.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit( $id ) {
        $tablet = $this->tabletRepository->findWithoutFail( $id );

        if ( empty( $tablet ) ) {
            Flash::error( 'Tablet not found' );

            return redirect( route( 'tablets.index' ) );
        }

        return view( 'tablets.edit' )->with( 'tablet', $tablet );
    }

    /**
     * Update the specified Tablet in storage.
     *
     * @param  int              $id
     * @param UpdateTabletRequest $request
     *
     * @return Response
     */
    public function update( $id, UpdateTabletRequest $request ) {
        $tablet = $this->tabletRepository->findWithoutFail( $id );

        if ( empty( $tablet ) ) {
            Flash::error( 'Tablet not found' );

            return redirect( route( 'tablets.index' ) );
        }

        try{
            if ( $request->hasFile( 'image' ) && $request->file( 'image' )->isValid() ) {
                $originalName = $request->file( 'image' )->getClientOriginalName();
                $nameWithoutSpace = preg_replace( '/\s+/', '-', $originalName );
                $month = date('F-Y');
                $path = $request->file( 'image' )->storeAs( $month, $nameWithoutSpace, 'public' );
                $input = $request->all();
                $input[ 'image' ] = 'storage/' . $path;
                $tablet = $this->tabletRepository->update( $input, $id );
                $message = "Tablet saved successfully.";
            }
           
        } catch ( Exception $e ) {
            $e->getMessage();
            $message = "Error " . $e->getMessage(); 
        }

        Flash::success( $message );
        return redirect( route( 'tablets.index' ) );
    }

    /**
     * Remove the specified Tablet from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy( $id ) {
        $tablet = $this->tabletRepository->findWithoutFail( $id );

        if ( empty( $tablet ) ) {
            Flash::error( 'Tablet not found' );

            return redirect( route( 'tablets.index' ) );
        }

        $this->tabletRepository->delete( $id );

        Flash::success( 'Tablet deleted successfully.' );

        return redirect( route( 'tablets.index' ) );
    }
}
