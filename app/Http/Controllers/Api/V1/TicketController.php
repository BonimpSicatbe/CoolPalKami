<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\TicketsFilter;
use App\Http\Controllers\Controller;
use App\Models\Ticket;
use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use App\Http\Resources\V1\TicketResource;
use App\Http\Resources\V1\TicketCollection;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $filter = new TicketsFilter();
            $queryItems = $filter->transform($request);

            if (count($queryItems) == 0) {
                return new TicketCollection(Ticket::paginate());
            } else {
                $ticket = Ticket::where($queryItems)->paginate();
                return new TicketCollection($ticket->appends($request->query()));
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while processing your request.'], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketRequest $request)
    {
        try {
            $ticket = Ticket::create($request->validated());
            return new TicketResource($ticket);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while creating the ticket.'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        try {
            $includeMovie = request()->query('includeMovie');
            $includeUser = request()->query('includeUser');
            $includeAll = request()->query('includeAll');

            if ($includeAll) {
                $ticket->load(['movie', 'user']);
            } else {
                if ($includeMovie) {
                    $ticket->load('movie');
                }
                if ($includeUser) {
                    $ticket->load('user');
                }
            }

            return new TicketResource($ticket);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while retrieving the ticket.'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketRequest $request, Ticket $ticket)
    {
        try {
            $ticket->update($request->validated());
            return new TicketResource($ticket);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while updating the ticket.'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        try {
            $ticket->delete();
            return response()->json(['message' => 'Ticket deleted successfully.'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while deleting the ticket.'], 500);
        }
    }
}
