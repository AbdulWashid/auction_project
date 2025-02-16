<?php

namespace App\Http\Controllers\adminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Wallet;

class transactionController extends Controller
{
    public function index($status){
        return view('admin.transactions',compact('status'));
    }


    public function status(Request $request,$id){
        $request->validate([
            'status' => ['required','string','in:approved,cancelled'],
        ]);
        $transaction = Wallet::findOrFail($id);
        $transaction->status = $request->status;
        $transaction->save();

        return redirect()->back()->with('success', 'Transaction status updated successfully!');
    }
        
    public function filter(Request $request)
    {
        $query = DB::table('wallets')->orderBy('id','desc');

        if ($request->date) {
            $query->whereDate('created_at', $request->date);
        }

        if ($request->status && $request->status != 'all') {
            $query->where('status', $request->status);
        }

        if ($request->search) {
            $query->where('transaction_id', 'LIKE', '%' . $request->search . '%') ;
            // ->orWhere('wallet_address', 'LIKE', '%' . $request->search . '%')
            // ->orWhere('transaction_id', 'LIKE', '%' . $request->search . '%');
        }

        $orders = $query->paginate(5);
        
        $html = '';
        $counter = 1;
        foreach ($orders as $order) {
            
            $actionTD = ''; // Initialize actionTD

            if ($order->status == 'pending') {
                $actionTD = '<form class="approve-form" action="' . route('admin.status', $order->id) . '" method="POST">
                                ' . csrf_field() . '
                                <input type="hidden" name="status" value="approved">
                                <button type="submit" class="btn btn-success btn-sm">Approve</button>
                            </form>
    
                            <form class="cancel-form" action="' . route('admin.status', $order->id) . '" method="POST">
                                ' . csrf_field() . '
                                <input type="hidden" name="status" value="cancelled">
                                <button type="submit" class="btn btn-danger btn-sm">Cancel</button>
                            </form>';
            } elseif ($order->status == 'approved') {
                $actionTD = '<span class="badge bg-primary"><i class="bi bi-check-circle"></i> Approved</span>';
            } else {
                $actionTD = '<span class="badge bg-danger"><i class="bi bi-x-circle"></i> Cancel</span>';
            }

            $html .= '<tr>
                        <td>'.$counter++.'</td>
                        <td>'.$order->user_id .'</td>
                        <td>'.$order->balance.'</td>
                        <td>'.$order->type.'</td>
                        <td>'.$order->transaction_id.'</td>
                        <td class="d-flex gap-3">'.$actionTD.'</td>
                    </tr>';
        }
        $NoData = "<tr class='text-danger text-center'><td colspan='6'>No Data Found</td></tr>";
        $html = $orders->toArray() ? $html : $NoData;

         // Render pagination links
        $pagination = $orders->links()->render();

        return response()->json([
            'tableData' => $html,
            'pagination' => $pagination
        ]);
    
        // return response()->json($html);
    }

}
