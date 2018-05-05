<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDealsAPIRequest;
use App\Http\Requests\API\UpdateDealsAPIRequest;
use App\Models\Deals;
use App\Repositories\DealsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class DealsController
 * @package App\Http\Controllers\API
 */

class DealsAPIController extends AppBaseController {
    /** @var  DealsRepository */
    private $dealsRepository;

    public function __construct( DealsRepository $dealsRepo ) {
        $this->dealsRepository = $dealsRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/deals",
     *      summary="Get a listing of the Deals.",
     *      tags={ "Deals" },
     *      description="Get all Deals",
     *      produces={ "application/json" },
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/Deals")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index( Request $request ) {
        $this->dealsRepository->pushCriteria( new RequestCriteria( $request ) );
        $this->dealsRepository->pushCriteria( new LimitOffsetCriteria( $request ) );
        $deals = $this->dealsRepository->all();

        return $this->sendResponse( $deals->toArray(), 'Deals retrieved successfully' );
    }

    /**
     * @param CreateDealsAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/deals",
     *      summary="Store a newly created Deals in storage",
     *      tags={ "Deals" },
     *      description="Store Deals",
     *      produces={ "application/json" },
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Deals that should be stored",
     *          required=false,
     *          @SWG\Schema( ref="#/definitions/Deals" )
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Deals"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store( CreateDealsAPIRequest $request ) {
        $input = $request->all();

        $deals = $this->dealsRepository->create( $input );

        return $this->sendResponse( $deals->toArray(), 'Deals saved successfully' );
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/deals/{ id }",
     *      summary="Display the specified Deals",
     *      tags={ "Deals" },
     *      description="Get Deals",
     *      produces={ "application/json" },
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Deals",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Deals"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show( $id ) {
        /** @var Deals $deals */
        $deals = $this->dealsRepository->findWithoutFail( $id );

        if ( empty( $deals ) ) {
            return $this->sendError( 'Deals not found' );
        }

        return $this->sendResponse( $deals->toArray(), 'Deals retrieved successfully' );
    }

    /**
     * @param int $id
     * @param UpdateDealsAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/deals/{ id }",
     *      summary="Update the specified Deals in storage",
     *      tags={ "Deals" },
     *      description="Update Deals",
     *      produces={ "application/json" },
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Deals",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Deals that should be updated",
     *          required=false,
     *          @SWG\Schema( ref="#/definitions/Deals" )
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Deals"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update( $id, UpdateDealsAPIRequest $request ) {
        $input = $request->all();

        /** @var Deals $deals */
        $deals = $this->dealsRepository->findWithoutFail( $id );

        if ( empty( $deals ) ) {
            return $this->sendError( 'Deals not found' );
        }

        $deals = $this->dealsRepository->update( $input, $id );

        return $this->sendResponse( $deals->toArray(), 'Deals updated successfully' );
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/deals/{ id }",
     *      summary="Remove the specified Deals from storage",
     *      tags={ "Deals" },
     *      description="Delete Deals",
     *      produces={ "application/json" },
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Deals",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy( $id ) {
        /** @var Deals $deals */
        $deals = $this->dealsRepository->findWithoutFail( $id );

        if ( empty( $deals ) ) {
            return $this->sendError( 'Deals not found' );
        }

        $deals->delete();

        return $this->sendResponse( $id, 'Deals deleted successfully' );
    }
}
