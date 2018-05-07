<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStoreRequest;
use App\Http\Requests\UpdateStoreRequest;
use App\Repositories\StoreRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class StoreController extends AppBaseController {
    /** @var  StoreRepository */
    private $storeRepository;

    public function __construct( StoreRepository $storeRepo ) {
        $this->storeRepository = $storeRepo;
    }

    /**
     * Display a listing of the Store.
     *
     * @param Request $request
     * @return Response
     */
    public function index( Request $request ) {
        $this->storeRepository->pushCriteria( new RequestCriteria( $request ) );
        $stores = $this->storeRepository->all();

        return view( 'stores.index' )
            ->with( 'stores', $stores );
    }

    /**
     * Show the form for creating a new Store.
     *
     * @return Response
     */
    public function create() {
        return view( 'stores.create' );
    }

    /**
     * Store a newly created Store in storage.
     *
     * @param CreateStoreRequest $request
     *
     * @return Response
     */
    public function store( CreateStoreRequest $request ) {
        try{
            if ( $request->hasFile( 'logo' ) && $request->file( 'logo' )->isValid() ) {
                $originalName = $request->file( 'logo' )->getClientOriginalName();
                $nameWithoutSpace = preg_replace( '/\s+/', '-', $originalName );
                $month = date('F-Y');
                $path = $request->file( 'logo' )->storeAs( $month, $nameWithoutSpace, 'public' );
                $input = $request->all();
                $input[ 'logo' ] = 'storage/' . $path;
                $store = $this->storeRepository->create( $input );
                $message = "Store saved successfully.";
            }
           
        } catch ( Exception $e ) {
            $e->getMessage();
            $message = "Error " . $e->getMessage(); 
        }

        Flash::success( $message );

        return redirect( route( 'stores.index' ) );
    }

    /**
     * Display the specified Store.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show( $id ) {
        $store = $this->storeRepository->findWithoutFail( $id );

        if ( empty( $store ) ) {
            Flash::error( 'Store not found' );

            return redirect( route( 'stores.index' ) );
        }

        return view( 'stores.show' )->with( 'store', $store );
    }

    /**
     * Show the form for editing the specified Store.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit( $id ) {
        $store = $this->storeRepository->findWithoutFail( $id );

        if ( empty( $store ) ) {
            Flash::error( 'Store not found' );

            return redirect( route( 'stores.index' ) );
        }

        return view( 'stores.edit' )->with( 'store', $store );
    }

    /**
     * Update the specified Store in storage.
     *
     * @param  int              $id
     * @param UpdateStoreRequest $request
     *
     * @return Response
     */
    public function update( $id, UpdateStoreRequest $request ) {
        $store = $this->storeRepository->findWithoutFail( $id );

        if ( empty( $store ) ) {
            Flash::error( 'Store not found' );

            return redirect( route( 'stores.index' ) );
        }

        try{
            if ( $request->hasFile( 'logo' ) && $request->file( 'logo' )->isValid() ) {
                $originalName = $request->file( 'logo' )->getClientOriginalName();
                $nameWithoutSpace = preg_replace( '/\s+/', '-', $originalName );
                $month = date('F-Y');
                $path = $request->file( 'logo' )->storeAs( $month, $nameWithoutSpace, 'public' );
                $input = $request->all();
                $input[ 'logo' ] = 'storage/' . $path;
                $store = $this->storeRepository->update( $input, $id );
                $message = "Store saved successfully.";
            }
           
        } catch ( Exception $e ) {
            $e->getMessage();
            $message = "Error " . $e->getMessage(); 
        }

        Flash::success( $message );

        return redirect( route( 'stores.index' ) );
    }

    /**
     * Remove the specified Store from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy( $id ) {
        $store = $this->storeRepository->findWithoutFail( $id );

        if ( empty( $store ) ) {
            Flash::error( 'Store not found' );

            return redirect( route( 'stores.index' ) );
        }

        $this->storeRepository->delete( $id );

        Flash::success( 'Store deleted successfully.' );

        return redirect( route( 'stores.index' ) );
    }
}
