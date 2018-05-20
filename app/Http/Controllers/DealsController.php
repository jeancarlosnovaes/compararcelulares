<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDealsRequest;
use App\Http\Requests\UpdateDealsRequest;
use App\Repositories\DealsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use App\Models\Store;

class DealsController extends AppBaseController {
    /** @var  DealsRepository */
    private $dealsRepository;

    public function __construct( DealsRepository $dealsRepo ) {
        $this->dealsRepository = $dealsRepo;
    }

    /**
     * Display a listing of the Deals.
     *
     * @param Request $request
     * @return Response
     */
    public function index( Request $request ) {
        $this->dealsRepository->pushCriteria( new RequestCriteria( $request ) );
        $deals = $this->dealsRepository->all();
        return view( 'deals.index' )
            ->with( 'deals', $deals );
    }

    /**
     * Display a listing of the Deals.
     *
     * @param Request $request
     * @return Response
     */
    public function getAllDeals( Request $request ) {
        $this->dealsRepository->pushCriteria( new RequestCriteria( $request ) );
        $deals = $this->dealsRepository->paginate(20);

        return view( 'deals.deals' )
            ->with( 'deals', $deals );
    }

    /**
     * Show the form for creating a new Deals.
     *
     * @return Response
     */
    public function create() {
        $stores = Store::pluck( 'name', 'id' ); //Added to select stores
        return view( 'deals.create' )
            ->with( 'stores', $stores );
    }

    /**
     * Store a newly created Deals in storage.
     *
     * @param CreateDealsRequest $request
     *
     * @return Response
     */
    public function store( CreateDealsRequest $request ) {
        try{
            if ( $request->hasFile( 'image' ) && $request->file( 'image' )->isValid() ) {
                $originalName = $request->file( 'image' )->getClientOriginalName();
                $nameWithoutSpace = preg_replace( '/\s+/', '-', $originalName );
                $month = date('F-Y');
                $path = $request->file( 'image' )->storeAs( $month, $nameWithoutSpace, 'public' );
                $input = $request->all();
                $input[ 'image' ] = 'storage/' . $path;
                $deals = $this->dealsRepository->create( $input );
                $message = "Deals saved successfully.";
            }
            $message = "Deals unsaved.";
           
        } catch ( Exception $e ) {
            $e->getMessage();
            $message = "Error " . $e->getMessage(); 
        }

        Flash::success( $message );

        return redirect( route( 'deals.index' ) );
    }

    /**
     * Display the specified Deals.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show( $id ) {
        $deals = $this->dealsRepository->findWithoutFail( $id );

        if ( empty( $deals ) ) {
            Flash::error( 'Deals not found' );

            return redirect( route( 'deals.index' ) );
        }

        return view( 'deals.show' )->with( 'deals', $deals );
    }

    /**
     * Show the form for editing the specified Deals.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit( $id ) {
        $deals = $this->dealsRepository->findWithoutFail( $id );
        $stores = Store::pluck( 'name', 'id' ); //Added to select stores
       
        if ( empty( $deals ) ) {
            Flash::error( 'Deals not found' );

            return redirect( route( 'deals.index' ) );
        }

        try{
            if ( $request->hasFile( 'image' ) && $request->file( 'image' )->isValid() ) {
                $originalName = $request->file( 'image' )->getClientOriginalName();
                $nameWithoutSpace = preg_replace( '/\s+/', '-', $originalName );
                $month = date('F-Y');
                $path = $request->file( 'image' )->storeAs( $month, $nameWithoutSpace, 'public' );
                $input = $request->all();
                $input[ 'image' ] = 'storage/' . $path;
                $deals = $this->dealsRepository->update( $input, $id );
                $message = "Deals saved successfully.";
            }
            $message = "Deals unsaved.";
           
        } catch ( Exception $e ) {
            $e->getMessage();
            $message = "Error " . $e->getMessage(); 
        }

        Flash::success( $message );

        return view( 'deals.edit' )->with( [ 'deals' => $deals, 'stores' => $stores ] );
    }

    /**
     * Update the specified Deals in storage.
     *
     * @param  int              $id
     * @param UpdateDealsRequest $request
     *
     * @return Response
     */
    public function update( $id, UpdateDealsRequest $request ) {
        $deals = $this->dealsRepository->findWithoutFail( $id );

        if ( empty( $deals ) ) {
            Flash::error( 'Deals not found' );

            return redirect( route( 'deals.index' ) );
        }

        $deals = $this->dealsRepository->update( $request->all(), $id );

        Flash::success( 'Deals updated successfully.' );

        return redirect( route( 'deals.index' ) );
    }

    /**
     * Remove the specified Deals from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy( $id ) {
        $deals = $this->dealsRepository->findWithoutFail( $id );

        if ( empty( $deals ) ) {
            Flash::error( 'Deals not found' );

            return redirect( route( 'deals.index' ) );
        }

        $this->dealsRepository->delete( $id );

        Flash::success( 'Deals deleted successfully.' );

        return redirect( route( 'deals.index' ) );
    }
}
