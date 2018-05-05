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
        $input = $request->all();

        $tablet = $this->tabletRepository->create( $input );

        Flash::success( 'Tablet saved successfully.' );

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

        $tablet = $this->tabletRepository->update( $request->all(), $id );

        Flash::success( 'Tablet updated successfully.' );

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
