<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTabletAPIRequest;
use App\Http\Requests\API\UpdateTabletAPIRequest;
use App\Models\Tablet;
use App\Repositories\TabletRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class TabletController
 * @package App\Http\Controllers\API
 */

class TabletAPIController extends AppBaseController {
    /** @var  TabletRepository */
    private $tabletRepository;

    public function __construct( TabletRepository $tabletRepo ) {
        $this->tabletRepository = $tabletRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/tablets",
     *      summary="Get a listing of the Tablets.",
     *      tags={ "Tablet" },
     *      description="Get all Tablets",
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
     *                  @SWG\Items(ref="#/definitions/Tablet")
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
        $this->tabletRepository->pushCriteria( new RequestCriteria( $request ) );
        $this->tabletRepository->pushCriteria( new LimitOffsetCriteria( $request ) );
        $tablets = $this->tabletRepository->all();

        return $this->sendResponse( $tablets->toArray(), 'Tablets retrieved successfully' );
    }

    /**
     * @param CreateTabletAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/tablets",
     *      summary="Store a newly created Tablet in storage",
     *      tags={ "Tablet" },
     *      description="Store Tablet",
     *      produces={ "application/json" },
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Tablet that should be stored",
     *          required=false,
     *          @SWG\Schema( ref="#/definitions/Tablet" )
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
     *                  ref="#/definitions/Tablet"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store( CreateTabletAPIRequest $request ) {
        $input = $request->all();

        $tablets = $this->tabletRepository->create( $input );

        return $this->sendResponse( $tablets->toArray(), 'Tablet saved successfully' );
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/tablets/{ id }",
     *      summary="Display the specified Tablet",
     *      tags={ "Tablet" },
     *      description="Get Tablet",
     *      produces={ "application/json" },
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Tablet",
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
     *                  ref="#/definitions/Tablet"
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
        /** @var Tablet $tablet */
        $tablet = $this->tabletRepository->findWithoutFail( $id );

        if ( empty( $tablet ) ) {
            return $this->sendError( 'Tablet not found' );
        }

        return $this->sendResponse( $tablet->toArray(), 'Tablet retrieved successfully' );
    }

    /**
     * @param int $id
     * @param UpdateTabletAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/tablets/{ id }",
     *      summary="Update the specified Tablet in storage",
     *      tags={ "Tablet" },
     *      description="Update Tablet",
     *      produces={ "application/json" },
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Tablet",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Tablet that should be updated",
     *          required=false,
     *          @SWG\Schema( ref="#/definitions/Tablet" )
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
     *                  ref="#/definitions/Tablet"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update( $id, UpdateTabletAPIRequest $request ) {
        $input = $request->all();

        /** @var Tablet $tablet */
        $tablet = $this->tabletRepository->findWithoutFail( $id );

        if ( empty( $tablet ) ) {
            return $this->sendError( 'Tablet not found' );
        }

        $tablet = $this->tabletRepository->update( $input, $id );

        return $this->sendResponse( $tablet->toArray(), 'Tablet updated successfully' );
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/tablets/{ id }",
     *      summary="Remove the specified Tablet from storage",
     *      tags={ "Tablet" },
     *      description="Delete Tablet",
     *      produces={ "application/json" },
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Tablet",
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
        /** @var Tablet $tablet */
        $tablet = $this->tabletRepository->findWithoutFail( $id );

        if ( empty( $tablet ) ) {
            return $this->sendError( 'Tablet not found' );
        }

        $tablet->delete();

        return $this->sendResponse( $id, 'Tablet deleted successfully' );
    }
}
