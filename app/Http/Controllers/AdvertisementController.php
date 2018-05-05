<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdvertisementRequest;
use App\Http\Requests\UpdateAdvertisementRequest;
use App\Repositories\AdvertisementRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AdvertisementController extends AppBaseController {
    /** @var  AdvertisementRepository */
    private $advertisementRepository;

    public function __construct( AdvertisementRepository $advertisementRepo ) {
        $this->advertisementRepository = $advertisementRepo;
    }

    /**
     * Display a listing of the Advertisement.
     *
     * @param Request $request
     * @return Response
     */
    public function index( Request $request ) {
        $this->advertisementRepository->pushCriteria( new RequestCriteria( $request ) );
        $advertisements = $this->advertisementRepository->all();

        return view( 'advertisements.index' )
            ->with( 'advertisements', $advertisements );
    }

    /**
     * Show the form for creating a new Advertisement.
     *
     * @return Response
     */
    public function create() {
        return view( 'advertisements.create' );
    }

    /**
     * Store a newly created Advertisement in storage.
     *
     * @param CreateAdvertisementRequest $request
     *
     * @return Response
     */
    public function store( CreateAdvertisementRequest $request ) {
        $input = $request->all();

        $advertisement = $this->advertisementRepository->create( $input );

        Flash::success( 'Advertisement saved successfully.' );

        return redirect( route( 'advertisements.index' ) );
    }

    /**
     * Display the specified Advertisement.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show( $id ) {
        $advertisement = $this->advertisementRepository->findWithoutFail( $id );

        if ( empty( $advertisement ) ) {
            Flash::error( 'Advertisement not found' );

            return redirect( route( 'advertisements.index' ) );
        }

        return view( 'advertisements.show' )->with( 'advertisement', $advertisement );
    }

    /**
     * Show the form for editing the specified Advertisement.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit( $id ) {
        $advertisement = $this->advertisementRepository->findWithoutFail( $id );

        if ( empty( $advertisement ) ) {
            Flash::error( 'Advertisement not found' );

            return redirect( route( 'advertisements.index' ) );
        }

        return view( 'advertisements.edit' )->with( 'advertisement', $advertisement );
    }

    /**
     * Update the specified Advertisement in storage.
     *
     * @param  int              $id
     * @param UpdateAdvertisementRequest $request
     *
     * @return Response
     */
    public function update( $id, UpdateAdvertisementRequest $request ) {
        $advertisement = $this->advertisementRepository->findWithoutFail( $id );

        if ( empty( $advertisement ) ) {
            Flash::error( 'Advertisement not found' );

            return redirect( route( 'advertisements.index' ) );
        }

        $advertisement = $this->advertisementRepository->update( $request->all(), $id );

        Flash::success( 'Advertisement updated successfully.' );

        return redirect( route( 'advertisements.index' ) );
    }

    /**
     * Remove the specified Advertisement from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy( $id ) {
        $advertisement = $this->advertisementRepository->findWithoutFail( $id );

        if ( empty( $advertisement ) ) {
            Flash::error( 'Advertisement not found' );

            return redirect( route( 'advertisements.index' ) );
        }

        $this->advertisementRepository->delete( $id );

        Flash::success( 'Advertisement deleted successfully.' );

        return redirect( route( 'advertisements.index' ) );
    }
}
