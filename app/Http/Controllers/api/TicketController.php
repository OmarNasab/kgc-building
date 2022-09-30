<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SendMessageRequest;
use App\Http\Requests\StoreTicketRequest;
use App\Http\Resources\TicketResource;
use App\Models\Ticket;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTicketRequest $request
     * @return JsonResponse
     */
    public function store(StoreTicketRequest $request): JsonResponse
    {
        try {
            Ticket::query()->create($request->validated());
        }catch (Exception $e){
            return new JsonResponse("Unexpected error\n".$e,400);
    }

    return new JsonResponse("Inserted Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param Ticket $ticket
     * @return TicketResource
     */
    public function show(Ticket $ticket): TicketResource
    {
        return new TicketResource($ticket);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Ticket $ticket
     * @return Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Ticket $ticket
     * @return JsonResponse
     */
    public function sendMessage(SendMessageRequest $request, Ticket $ticket): JsonResponse
    {

        try {
            $messages=json_decode($ticket->message,true);
            $message = [
                "sender"=>"client",
                "type"=>"text",
                "content"=>$request->message,
                "time"=>date_format(now(),"Y-m-d h:i:s")
            ];
            $messages[] = $message;
            $ticket->message=json_encode($messages);
            $ticket->save();
        }catch (Exception $e){
            return new JsonResponse("Unexpected Error".$e,400);
        }
        return new JsonResponse("success");



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Ticket $ticket
     * @return Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
