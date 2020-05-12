<?php
namespace App\Http\Controllers\Api\v1;
use App\Http\Controllers\Controller;
use App\ObjectTag;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ObjectTagsController  extends Controller
{
    use ApiResponser;
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return List of objectTag
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        //
        $objectTags = ObjectTag::all();
        
        return $this->successResponse($objectTags);
      
    }

    /**
     * Create one new objectTag
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $this->validate($request,[

            'object_id'=>'required|integer',
            'tag_id'=>'required|integer',
        ]);
       
        $objectTag = ObjectTag::create($request->all());          
        return $this->successResponse($objectTag,Response::HTTP_CREATED);
       
    }

    /**
     * get one objectTag
     *
     * @return Illuminate\Http\Response
     */
    public function show($objectTag)
    {
        //

        $objectTag = ObjectTag::findOrFail($objectTag);
        return $this->successResponse($objectTag);
        
    }

    /**
     * update an existing one objectTag
     *
     * @return Illuminate\Http\Response
     */
    public function update(Request $request,$objectTag)
    {

        $this->validate($request,[

            
            'object_id'=>'integer',
            'tag_id'=>'integer',
        ]);
        $objectTag = ObjectTag::findOrFail($objectTag);
        $objectTag->fill($request->all());

        
        if($objectTag->isClean()){
            return $this->errorResponse("you didn't change any value",Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $objectTag->save();
        return $this->successResponse($objectTag);
    }

     /**
     * remove an existing one objectTag
     *
     * @return Illuminate\Http\Response
     */
    public function destroy($objectTag)
    {
        $objectTag = ObjectTag::findOrFail($objectTag);
        $objectTag->delete();
        return $this->successResponse($objectTag);
      
    }

}
