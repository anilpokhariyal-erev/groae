<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Freezone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{

    public $startDate;

    public $endDate;

    public $freezone_id;

    public function __construct(Request $request){

    }

    public function index(Request $request){

        $request->validate([
            'start_date' => 'nullable|before_or_equal:end_date',
            'end_date' => 'nullable|after_or_equal:start_date',
        ],[
            'start_date' => 'The selected date was incorrect. Please select correct date.'
        ]);

        if($request->start_date){
            $this->startDate = $request->start_date;
        } else {
            $this->startDate = now()->subYear()->format('Y-m-d');
        }

        if($request->end_date){
            $this->endDate = $request->end_date;
        } else {
            $this->endDate = now()->format('Y-m-d');
        }

        if($request->freezone_id){
            $this->freezone_id = $request->freezone_id;
        }

        $freezones = Freezone::select('id', 'name')->get();

        $data = [
            'start_date' => $this->startDate,
            'end_date' => $this->endDate,
            'users_count' => $this->freezoneAdminCount(),
            'freezones' => $freezones,
            'freezone_id' => $this->freezone_id,
        ];

        return view('dashboard', $data);
    }

    public function freezoneAdminCount() {
        if(Auth::user()->freezone_id){
            $users = User::where('user_type', 'freezone_admin')
                        ->whereBetween('created_at', [$this->startDate.' 00:00:00', $this->endDate.' 23:59:59'])
                        ->whereIn('freezone_id', [Auth::user()->freezone_id, 0]);
        } else {
            $users = User::where('user_type', 'freezone_admin')
                        ->whereBetween('created_at', [$this->startDate.' 00:00:00', $this->endDate.' 23:59:59']);

            if($this->freezone_id){
                $users->whereIn('freezone_id', [$this->freezone_id, 0]);
            }
        }

        return $users->count();
    }

}

?>