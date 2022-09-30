<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TenantResetPasswordRequest;
use App\Http\Resources\ContractResource;
use App\Http\Resources\NotificationResource;
use App\Http\Resources\SurveysResource;
use App\Http\Resources\TicketCollection;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\TenantSignInRequest;
use App\Http\Resources\TenantResource;
use App\Models\Tenant;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Hash;

class TenantController extends Controller
{


    public function signIn(TenantSignInRequest $request): JsonResponse|TenantResource
    {
        $tenant=Tenant::query()->where("email",$request["email"])->first();
        if (!$tenant){
            return new JsonResponse("Error","401");
        }
        if(!Hash::check($request["password"],$tenant->password)){
            return new JsonResponse("Error","401");
        }
        return new TenantResource($tenant);
    }

    public function resetPassword(TenantResetPasswordRequest $request, Tenant $tenant): JsonResponse
    {
        if (!Hash::check($request["old_password"],$tenant["password"])){
            return new JsonResponse("Error",401);
        }
        $tenant->password=Hash::make($request->password);
        $tenant->save();
        return new JsonResponse("Success");
    }

    public function getActiveNotifications(Tenant $tenant): AnonymousResourceCollection
    {
        $notifications=$tenant->notifications()->where("status",1)->get();
        return NotificationResource::collection($notifications);
    }

    public function getActiveSurveys(Tenant $tenant): AnonymousResourceCollection
    {
        $surveys=$tenant->surveys()->where("status",1)->get();
        return SurveysResource::collection($surveys);
    }

    public function getContracts(Tenant $tenant): AnonymousResourceCollection
    {
        $contracts=$tenant->contracts()->with(["unit","building"])->get();
        return ContractResource::collection($contracts);
    }

    public function getTickets(Tenant $tenant): AnonymousResourceCollection
    {
        $tickets=$tenant->tickets()->get();
        return TicketCollection::collection($tickets);

    }
}
