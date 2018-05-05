<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePriceAlertRequest;
use App\Http\Requests\UpdatePriceAlertRequest;
use App\Repositories\PriceAlertRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PriceAlertController extends AppBaseController {
    /** @var  PriceAlertRepository */
    private $priceAlertRepository;

    public function __construct( PriceAlertRepository $priceAlertRepo ) {
        $this->priceAlertRepository = $priceAlertRepo;
    }

    /**
     * Display a listing of the PriceAlert.
     *
     * @param Request $request
     * @return Response
     */
    public function index( Request $request ) {
        $this->priceAlertRepository->pushCriteria( new RequestCriteria( $request ) );
        $priceAlerts = $this->priceAlertRepository->all();

        return view( 'price_alerts.index' )
            ->with( 'priceAlerts', $priceAlerts );
    }

    /**
     * Show the form for creating a new PriceAlert.
     *
     * @return Response
     */
    public function create() {
        return view( 'price_alerts.create' );
    }

    /**
     * Store a newly created PriceAlert in storage.
     *
     * @param CreatePriceAlertRequest $request
     *
     * @return Response
     */
    public function store( CreatePriceAlertRequest $request ) {
        $input = $request->all();

        $priceAlert = $this->priceAlertRepository->create( $input );

        Flash::success( 'Price Alert saved successfully.' );

        return redirect( route( 'priceAlerts.index' ) );
    }

    /**
     * Display the specified PriceAlert.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show( $id ) {
        $priceAlert = $this->priceAlertRepository->findWithoutFail( $id );

        if ( empty( $priceAlert ) ) {
            Flash::error( 'Price Alert not found' );

            return redirect( route( 'priceAlerts.index' ) );
        }

        return view( 'price_alerts.show' )->with( 'priceAlert', $priceAlert );
    }

    /**
     * Show the form for editing the specified PriceAlert.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit( $id ) {
        $priceAlert = $this->priceAlertRepository->findWithoutFail( $id );

        if ( empty( $priceAlert ) ) {
            Flash::error( 'Price Alert not found' );

            return redirect( route( 'priceAlerts.index' ) );
        }

        return view( 'price_alerts.edit' )->with( 'priceAlert', $priceAlert );
    }

    /**
     * Update the specified PriceAlert in storage.
     *
     * @param  int              $id
     * @param UpdatePriceAlertRequest $request
     *
     * @return Response
     */
    public function update( $id, UpdatePriceAlertRequest $request ) {
        $priceAlert = $this->priceAlertRepository->findWithoutFail( $id );

        if ( empty( $priceAlert ) ) {
            Flash::error( 'Price Alert not found' );

            return redirect( route( 'priceAlerts.index' ) );
        }

        $priceAlert = $this->priceAlertRepository->update( $request->all(), $id );

        Flash::success( 'Price Alert updated successfully.' );

        return redirect( route( 'priceAlerts.index' ) );
    }

    /**
     * Remove the specified PriceAlert from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy( $id ) {
        $priceAlert = $this->priceAlertRepository->findWithoutFail( $id );

        if ( empty( $priceAlert ) ) {
            Flash::error( 'Price Alert not found' );

            return redirect( route( 'priceAlerts.index' ) );
        }

        $this->priceAlertRepository->delete( $id );

        Flash::success( 'Price Alert deleted successfully.' );

        return redirect( route( 'priceAlerts.index' ) );
    }
}
