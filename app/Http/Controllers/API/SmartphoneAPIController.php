<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateSmartphoneAPIRequest;
use App\Http\Requests\API\UpdateSmartphoneAPIRequest;
use App\Models\Smartphone;
use App\Repositories\SmartphoneRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class SmartphoneController
 * @package App\Http\Controllers\API
 */

class SmartphoneAPIController extends AppBaseController {
    /** @var  SmartphoneRepository */
    private $smartphoneRepository;

    public function __construct( SmartphoneRepository $smartphoneRepo ) {
        $this->smartphoneRepository = $smartphoneRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/smartphones",
     *      summary="Get a listing of the Smartphones.",
     *      tags={ "Smartphone" },
     *      description="Get all Smartphones",
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
     *                  @SWG\Items(ref="#/definitions/Smartphone")
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
        $this->smartphoneRepository->pushCriteria( new RequestCriteria( $request ) );
        $this->smartphoneRepository->pushCriteria( new LimitOffsetCriteria( $request ) );
        $smartphones = $this->smartphoneRepository->all();

        return $this->sendResponse( $smartphones->toArray(), 'Smartphones retrieved successfully' );
    }

    /**
     * @param CreateSmartphoneAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/smartphones",
     *      summary="Store a newly created Smartphone in storage",
     *      tags={ "Smartphone" },
     *      description="Store Smartphone",
     *      produces={ "application/json" },
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Smartphone that should be stored",
     *          required=false,
     *          @SWG\Schema( ref="#/definitions/Smartphone" )
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
     *                  ref="#/definitions/Smartphone"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store( CreateSmartphoneAPIRequest $request ) {
        $input = $request->all();

        $smartphones = $this->smartphoneRepository->create( $input );

        return $this->sendResponse( $smartphones->toArray(), 'Smartphone saved successfully' );
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/smartphones/{ id }",
     *      summary="Display the specified Smartphone",
     *      tags={ "Smartphone" },
     *      description="Get Smartphone",
     *      produces={ "application/json" },
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Smartphone",
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
     *                  ref="#/definitions/Smartphone"
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
        /** @var Smartphone $smartphone */
        $smartphone = $this->smartphoneRepository->findWithoutFail( $id );

        if ( empty( $smartphone ) ) {
            return $this->sendError( 'Smartphone not found' );
        }

        return $this->sendResponse( $smartphone->toArray(), 'Smartphone retrieved successfully' );
    }

    /**
     * @param int $id
     * @param UpdateSmartphoneAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/smartphones/{ id }",
     *      summary="Update the specified Smartphone in storage",
     *      tags={ "Smartphone" },
     *      description="Update Smartphone",
     *      produces={ "application/json" },
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Smartphone",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Smartphone that should be updated",
     *          required=false,
     *          @SWG\Schema( ref="#/definitions/Smartphone" )
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
     *                  ref="#/definitions/Smartphone"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update( $id, UpdateSmartphoneAPIRequest $request ) {
        $input = $request->all();

        /** @var Smartphone $smartphone */
        $smartphone = $this->smartphoneRepository->findWithoutFail( $id );

        if ( empty( $smartphone ) ) {
            return $this->sendError( 'Smartphone not found' );
        }

        $smartphone = $this->smartphoneRepository->update( $input, $id );

        return $this->sendResponse( $smartphone->toArray(), 'Smartphone updated successfully' );
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/smartphones/{ id }",
     *      summary="Remove the specified Smartphone from storage",
     *      tags={ "Smartphone" },
     *      description="Delete Smartphone",
     *      produces={ "application/json" },
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Smartphone",
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
        /** @var Smartphone $smartphone */
        $smartphone = $this->smartphoneRepository->findWithoutFail( $id );

        if ( empty( $smartphone ) ) {
            return $this->sendError( 'Smartphone not found' );
        }

        $smartphone->delete();

        return $this->sendResponse( $id, 'Smartphone deleted successfully' );
    }
}
