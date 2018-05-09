<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCouponRequest;
use App\Http\Requests\UpdateCouponRequest;
use App\Repositories\CouponRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

use Exception;

class CouponController extends AppBaseController {
    /** @var  CouponRepository */
    private $couponRepository;

    public function __construct( CouponRepository $couponRepo ) {
        $this->couponRepository = $couponRepo;
    }

    /**
     * Display a listing of the Coupon.
     *
     * @param Request $request
     * @return Response
     */
    public function index( Request $request ) {
        $this->couponRepository->pushCriteria( new RequestCriteria( $request ) );
        $coupons = $this->couponRepository->all();

        return view( 'coupons.index' )
            ->with( 'coupons', $coupons );
    }

    /**
     * Show the form for creating a new Coupon.
     *
     * @return Response
     */
    public function create() {
        return view( 'coupons.create' );
    }

    /**
     * Store a newly created Coupon in storage.
     *
     * @param CreateCouponRequest $request
     *
     * @return Response
     */
    public function store( CreateCouponRequest $request ) {
        try{
            if ( $request->hasFile( 'image' ) && $request->file( 'image' )->isValid() ) {
                $originalName = $request->file( 'image' )->getClientOriginalName();
                $nameWithoutSpace = preg_replace( '/\s+/', '-', $originalName );
                $month = date('F-Y');
                $nameLowerCase = strtolower( $nameWithoutSpace );
                $path = $request->file( 'image' )->storeAs( $month, $nameLowerCase, 'public' );
                $input = $request->all();
                $input[ 'image' ] = 'storage/' . $path;
                $input[ 'vote_yes' ] = 0;
                $input[ 'vote_no' ] = 0;
                $coupon = $this->couponRepository->create( $input );
                $message = "Coupon saved successfully.";
            }
           
        } catch ( Exception $e ) {
            $message = "Error " . $e->getMessage(); 
        }

        Flash::success( $message );

        return redirect( route( 'coupons.index' ) );
    }

    /**
     * Display the specified Coupon.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show( $id ) {
        $coupon = $this->couponRepository->findWithoutFail( $id );

        if ( empty( $coupon ) ) {
            Flash::error( 'Coupon not found' );

            return redirect( route( 'coupons.index' ) );
        }

        return view( 'coupons.show' )->with( 'coupon', $coupon );
    }

    /**
     * Show the form for editing the specified Coupon.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit( $id ) {
        $coupon = $this->couponRepository->findWithoutFail( $id );

        if ( empty( $coupon ) ) {
            Flash::error( 'Coupon not found' );

            return redirect( route( 'coupons.index' ) );
        }

        return view( 'coupons.edit' )->with( 'coupon', $coupon );
    }

    /**
     * Update the specified Coupon in storage.
     *
     * @param  int              $id
     * @param UpdateCouponRequest $request
     *
     * @return Response
     */
    public function update( $id, UpdateCouponRequest $request ) {
        $coupon = $this->couponRepository->findWithoutFail( $id );

        if ( empty( $coupon ) ) {
            Flash::error( 'Coupon not found' );

            return redirect( route( 'coupons.index' ) );
        }

        try{
            if ( $request->hasFile( 'image' ) && $request->file( 'image' )->isValid() ) {
                $originalName = $request->file( 'image' )->getClientOriginalName();
                $nameWithoutSpace = preg_replace( '/\s+/', '-', $originalName );
                $month = date('F-Y');
                $nameLowerCase = strtolower( $nameWithoutSpace );
                $path = $request->file( 'image' )->storeAs( $month, $nameLowerCase, 'uploads' );
                $input = $request->all();
                $input[ 'image' ] = 'storage/' . $path;
                $coupon = $this->couponRepository->update( $input, $id );
                $message = "Coupon saved successfully.";
            }
           
        } catch ( Exception $e ) {
            $e->getMessage();
            $message = "Error " . $e->getMessage(); 
        }

        Flash::success( $message );

        return redirect( route( 'coupons.index' ) );
    }

    /**
     * Remove the specified Coupon from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy( $id ) {
        $coupon = $this->couponRepository->findWithoutFail( $id );

        if ( empty( $coupon ) ) {
            Flash::error( 'Coupon not found' );

            return redirect( route( 'coupons.index' ) );
        }

        $this->couponRepository->delete( $id );

        Flash::success( 'Coupon deleted successfully.' );

        return redirect( route( 'coupons.index' ) );
    }
}
