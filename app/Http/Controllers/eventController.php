<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Requests\newProductRequest;
use App\Http\Requests\newWelcomePartyRequest;
use App\Http\Requests\newAnniversaryRequest;
use App\Http\Requests\OpeningRequest;
use App\Http\Requests\brandingFormRequest;
use App\Models\table;
use App\Models\centerpiece;
use App\Models\ledScreen;
use App\Models\decoration;
use App\Models\marketing;

class eventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/events/events');
    }

    public function welcomePartyForm()
    {
        return view('/events/welcomeParty');
    }
    
    public function graduationForm()
    {
        return view('/events/graduation');
    }

    public function anniversaryForm()
    {
        return view('/events/anniversary');
    }
    public function ConferencesForm()
    {
        return view('/events/conferences');
    }

    public function newProductForm()
    {
        return view('/events/newProduct');
    }

    public function brandingEventForm()
    {
        return view('/events/brandingevent');
    }
    public function openingForm()
    {
        return view('/events/opening');
    }


    public function storeBrandingForm(brandingFormRequest $request)
    {
        $data=$request->validated();
        $eventID=$this->store($request,'New Product');
        // $eventID=12;
        $event = Event::find($eventID);
        
        // $data = $request->all();
        $data['event_id'] = $eventID;

        if($request->has('table')){
            //$tables=new table();
            //$data['event_id']=
            $tables=table::create($data);
            //$tables->event_id=$eventID;
            //dd($data);
            if($request->elseTableShape!=''){
                $tables->tableShape=$data['elseTableShape'];
            }
            else if($request->tableShape=='else'){
                $tables->tableShape='any';
            }

            $event->tables()->save($tables);
        }

        if($request->has('cp')){
            $centerpiece=centerpiece::create($data);
            // $centerpiece->event_id=$eventID;
            $event->centerpiece()->save($centerpiece);
        }

        if($request->has('ledScreen')){
            $ledScreen=ledScreen::create($data);
            //dd($ledScreen);
            // $ledScreen->event_id=$eventID;
            $event->ledScreen()->save($ledScreen);
        }

        if($request->has('decorations')){
            $decorations=new decoration();
            $decorations->details=$data['decodetails'];
            $decorations->budget=$data['decoBudget'];
            $event->decoration()->save($decorations);
        }
        
        if($request->has('market')){
            // $marketing=marketing::create($data);
            $marketing=new marketing();
            //dd($request);
            $marketing->budget=$data['marketingBudget'];
            $marketing->billboardAD=($request->has('billboardAD') ? true : false);
            $marketing->onlineAD=($request->has('onlineAD') ? true : false);
            $event->marketing()->save($marketing);
        } 
        
        return redirect()->route('home.home');
    }


    public function storeNewProduct(newProductRequest $request)
    {
        $data=$request->validated();
        $eventID=$this->store($request,'New Product');
      
        $event = Event::find($eventID);
        
      
        $data['event_id'] = $eventID;

        if($request->has('table')){
            
            $tables=table::create($data);
            
            if($request->elseTableShape!=''){
                $tables->tableShape=$data['elseTableShape'];
            }
            else if($request->tableShape=='else'){
                $tables->tableShape='any';
            }

            $event->tables()->save($tables);
        }

        if($request->has('cp')){
            $centerpiece=centerpiece::create($data);
            
            $event->centerpiece()->save($centerpiece);
        }

        if($request->has('ledScreen')){
            $ledScreen=ledScreen::create($data);
            
            $event->ledScreen()->save($ledScreen);
        }

        if($request->has('decorations')){
            $decorations=new decoration();
            $decorations->details=$data['decodetails'];
            $decorations->budget=$data['decoBudget'];
            $event->decoration()->save($decorations);
        }
        
        if($request->has('market')){
        
            $marketing=new marketing();
            $marketing->budget=$data['marketingBudget'];
            $marketing->billboardAD=($request->has('billboardAD') ? true : false);
            $marketing->onlineAD=($request->has('onlineAD') ? true : false);
            $event->marketing()->save($marketing);
        } 
        
        return redirect()->route('home.home');
    }

    public function storeWelcomeParty(newWelcomePartyRequest $request)
    {
        $data=$request->validated();
        $eventID=$this->store($request,'Welcome Party');
        $event = Event::find($eventID);
        
        $data['event_id'] = $eventID;

        if($request->has('ledScreen')){
            $ledScreen=ledScreen::create($data);
            
            $event->ledScreen()->save($ledScreen);
        }
        
        
        return redirect()->route('home.home');
    }

    public function storeAnniversary(newAnniversaryRequest $request)
    {
        $data=$request->validated();
        $eventID=$this->store($request,'Anniversary');
        $event = Event::find($eventID);
        
        $data['event_id'] = $eventID;

        if($request->has('table')){
            $tables=table::create($data);

            if($request->elseTableShape!=''){
                $tables->tableShape=$data['elseTableShape'];
            }
            else if($request->tableShape=='else'){
                $tables->tableShape='any';
            }

            $event->tables()->save($tables);
        }

        if($request->has('cp')){
            $centerpiece=centerpiece::create($data);
            $event->centerpiece()->save($centerpiece);
        }

        if($request->has('decorations')){
            $decorations=new decoration();
            $decorations->details=$data['decodetails'];
            $decorations->budget=$data['decoBudget'];
            $event->decoration()->save($decorations);
        }
     
        return redirect()->route('home.home');
    }

    public function storeNewGraduation(newProductRequest $request)
    {
        $data=$request->validated();
        $eventID=$this->store($request,'Graduation');
        $event = Event::find($eventID);
            
        $data['event_id'] = $eventID;

        if($request->has('table')){
            
            $tables=table::create($data);
            
            if($request->elseTableShape!=''){
                $tables->tableShape=$data['elseTableShape'];
            }
            else if($request->tableShape=='else'){
                $tables->tableShape='any';
            }

            $event->tables()->save($tables);
        }

        if($request->has('cp')){
            $centerpiece=centerpiece::create($data);
            // $centerpiece->event_id=$eventID;
            
            $event->centerpiece()->save($centerpiece);
        }

        if($request->has('ledScreen')){
            $ledScreen=ledScreen::create($data);
            //dd($ledScreen);
            // $ledScreen->event_id=$eventID;
            
            $event->ledScreen()->save($ledScreen);
        }

        if($request->has('decorations')){
            $decorations=new decoration();
            $decorations->details=$data['decodetails'];
            $decorations->budget=$data['decoBudget'];
            $event->decoration()->save($decorations);
        }
        
        
        return redirect()->route('home.home');
    }

    public function storeNewConferences(newProductRequest $request)
    {
        $data=$request->validated();
        $eventID=$this->store($request,'Conferences');
      
        $event = Event::find($eventID);
        
      
        $data['event_id'] = $eventID;

        if($request->has('table')){
            
            $tables=table::create($data);
            
            if($request->elseTableShape!=''){
                $tables->tableShape=$data['elseTableShape'];
            }
            else if($request->tableShape=='else'){
                $tables->tableShape='any';
            }

            $event->tables()->save($tables);
        }

        if($request->has('cp')){
            $centerpiece=centerpiece::create($data);
            
            $event->centerpiece()->save($centerpiece);
        }

        if($request->has('ledScreen')){
            $ledScreen=ledScreen::create($data);
            
            $event->ledScreen()->save($ledScreen);
        }

        if($request->has('decorations')){
            $decorations=new decoration();
            $decorations->details=$data['decodetails'];
            $decorations->budget=$data['decoBudget'];
            $event->decoration()->save($decorations);
        }
        
        if($request->has('market')){
            // $marketing=marketing::create($data);
            $marketing=new marketing();
            //dd($request);
            $marketing->budget=$data['marketingBudget'];
            $marketing->billboardAD=($request->has('billboardAD') ? true : false);
            $marketing->onlineAD=($request->has('onlineAD') ? true : false);
            $event->marketing()->save($marketing);
        } 
        
        return redirect()->route('home.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $eventType)
    {
        $data=$request->validated();
      
        
        $event=new Event();

        $event->type=$eventType;

        if($request->has('stage')){
            $event->stageLength=$data['stageLength'];
            $event->stageWidth=$data['stageWidth'];
        }
        
        if($request->has('lightsColor')){
            $event->lightsColor=$data['lightsColor'];
        }
        
        if($request->has('budget')){
            $event->budget=$data['budget'];
        }
        
        $event->indoors=($request->has('indoors') ? true : false);
        $event->soundSetup=($request->has('soundSetup') ? true : false);
        $event->photo=($request->has('photo') ? true : false);
        $event->video=($request->has('video') ? true : false);
        $event->plixie=($request->has('plixie') ? true : false);

        
        $event->save();
        $eventID= $event->id;
        $userid=Auth::guard('customer')->user()->id;
        
        app(orderController::class)->create($userid,$eventID,'event');
        return $eventID;
    }

    public function storeOpening(newProductRequest $request)
    {
        $data=$request->validated();
        $eventID=$this->store($request,'Opening');
      
        $event = Event::find($eventID);
        
      
        $data['event_id'] = $eventID;

        if($request->has('table')){
            
            $tables=table::create($data);
            
            if($request->elseTableShape!=''){
                $tables->tableShape=$data['elseTableShape'];
            }
            else if($request->tableShape=='else'){
                $tables->tableShape='any';
            }

            $event->tables()->save($tables);
        }

        if($request->has('cp')){
            $centerpiece=centerpiece::create($data);
            
            $event->centerpiece()->save($centerpiece);
        }

        if($request->has('ledScreen')){
            $ledScreen=ledScreen::create($data);
            
            $event->ledScreen()->save($ledScreen);
        }

        if($request->has('decorations')){
            $decorations=new decoration();
            $decorations->details=$data['decodetails'];
            $decorations->budget=$data['decoBudget'];
            $event->decoration()->save($decorations);
        }
        
        if($request->has('market')){
        
            $marketing=new marketing();
            $marketing->budget=$data['marketingBudget'];
            $marketing->billboardAD=($request->has('billboardAD') ? true : false);
            $marketing->onlineAD=($request->has('onlineAD') ? true : false);
            $event->marketing()->save($marketing);
        } 
        
        return redirect()->route('home.home');
    }

    public function table($data,$request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}