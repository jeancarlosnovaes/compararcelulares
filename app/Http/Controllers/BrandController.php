<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Repositories\BrandRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class BrandController extends AppBaseController {
    /** @var  BrandRepository */
    private $brandRepository;

    public function __construct( BrandRepository $brandRepo ) {
        $this->brandRepository = $brandRepo;
    }

    /**
     * Display a listing of the Brand.
     *
     * @param Request $request
     * @return Response
     */
    public function index( Request $request ) {
        $this->brandRepository->pushCriteria( new RequestCriteria( $request ) );
        $brands = $this->brandRepository->all();

        return view( 'brands.index' )
            ->with( 'brands', $brands );
    }

    /**
     * Show the form for creating a new Brand.
     *
     * @return Response
     */
    public function create() {
        return view( 'brands.create' );
    }

    /**
     * Store a newly created Brand in storage.
     *
     * @param CreateBrandRequest $request
     *
     * @return Response
     */
    public function store( CreateBrandRequest $request ) {
        try{
            if ( $request->hasFile( 'logo' ) && $request->file( 'logo' )->isValid() ) {
                $originalName = $request->file( 'logo' )->getClientOriginalName();
                $nameWithoutSpace = preg_replace( '/\s+/', '-', $originalName );
                $request->logo->storeAs( 'storage', $nameWithoutSpace );
                $input = $request->all();
                $input[ 'logo' ] = $nameWithoutSpace;
                $brand = $this->brandRepository->create( $input );
                $messagem = "Brand saved successfully.";
            }
                 
        } catch ( Exception $e ) {
            $e->getMessage();
            $message = "Error " . $e->getMessage(); 
        }

        Flash::success( $messagem );

        return redirect( route( 'brands.index' ) );
    }

    /**
     * Display the specified Brand.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show( $id ) {
        $brand = $this->brandRepository->findWithoutFail( $id );

        if ( empty( $brand ) ) {
            Flash::error( 'Brand not found' );

            return redirect( route( 'brands.index' ) );
        }

        return view( 'brands.show' )->with( 'brand', $brand );
    }

    /**
     * Show the form for editing the specified Brand.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit( $id ) {
        $brand = $this->brandRepository->findWithoutFail( $id );

        if ( empty( $brand ) ) {
            Flash::error( 'Brand not found' );

            return redirect( route( 'brands.index' ) );
        }

        return view( 'brands.edit' )->with( 'brand', $brand );
    }

    /**
     * Update the specified Brand in storage.
     *
     * @param  int              $id
     * @param UpdateBrandRequest $request
     *
     * @return Response
     */
    public function update( $id, UpdateBrandRequest $request ) {

        $brand = $this->brandRepository->findWithoutFail( $id );

        if ( empty( $brand ) ) {
            Flash::error( 'Brand not found' );

            return redirect( route( 'brands.index' ) );
        }
       
        try{
            if ( $request->hasFile( 'logo' ) && $request->file( 'logo' )->isValid() ) {
                $originalName = $request->file( 'logo' )->getClientOriginalName();
                $nameWithoutSpace = preg_replace( '/\s+/', '-', $originalName );
                $path = 'storage' . date( 'm' );
                $request->file( 'logo' )->storeAs( 'storage', $nameWithoutSpace, 'public' );
                // dd($oi);
                $input = $request->all();
                $input[ 'logo' ] = $nameWithoutSpace;
                $brand = $this->brandRepository->update( $input, $id );
                $messagem = "Brand saved successfully.";
            }
                 
        } catch ( Exception $e ) {
            $e->getMessage();
            $message = "Error " . $e->getMessage(); 
        }

        Flash::success( $messagem );

        return redirect( route( 'brands.index' ) );
    }

    /**
     * Remove the specified Brand from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy( $id ) {
        $brand = $this->brandRepository->findWithoutFail( $id );

        if ( empty( $brand ) ) {
            Flash::error( 'Brand not found' );

            return redirect( route( 'brands.index' ) );
        }

        $this->brandRepository->delete( $id );

        Flash::success( 'Brand deleted successfully.' );

        return redirect( route( 'brands.index' ) );
    }
}
