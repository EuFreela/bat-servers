<?php

namespace Lameck\Dracula\Server\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Lameck\Dracula\Server\Models\Server;
use DB;
use DateTime;

class DraculaServerController extends Controller
{
    /*
    | GETTERS
    */
    public function getServerList()
    {
        return view('Lameck\Dracula\Server::server-list')
        ->with([
            'servers' => DB::table('server')->get()
        ]);
    }

    public function getServer($id)
    {
        return view('Lameck\Dracula\Server::server-edit')
        ->with([
            'server' => DB::table('server')->where('id','=',$id)->first()
        ]);
    }
    
    public function getServerCreate()
    {
        return view('Lameck\Dracula\Server::server-create');
    }
    
    
    /*  
    | POSTTERS 
    */
    public function postServerCreate(Request $request)
    {
        $request->validate([            
            'status' => 'required',
            'IP' => 'required',
            'PORT' => 'required'
        ]);

        if($request->status==1)
            DB::table('server')->update(['active'=>0]);

        $server = Server::create([
            'active' => $request->status,
            'ip' => $request->IP,
            'port' => $request->PORT,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        if($server)
            return redirect()->route('dracula.server.list')
            ->with('success',DB::table('systemsg')->where('code','=',5)->first()->msg);
        return redirect()->back()
            ->with('error',DB::table('systemsg')->where('code','=',6)->first()->msg);

    }


    /*  
    | PUTTERS 
    */
    public function putServer(Request $request, $id)
    {
        $request->validate([            
            'status' => 'required',
            'IP' => 'required',
            'PORT' => 'required'
        ]);
        
        if($request->status==1)
            DB::table('server')->update(['active'=>0]);

        $server = DB::table('server')->where('id','=',$id)
        ->update([
            'active' => $request->status,
            'ip' => $request->IP,
            'port' => $request->PORT,
            'updated_at' => new DateTime()
        ]);
            
        if($server)
            return redirect()->route('dracula.server.list')
            ->with('success',DB::table('systemsg')->where('code','=',1)->first()->msg);
        return redirect()->back()
            ->with('error',DB::table('systemsg')->where('code','=',2)->first()->msg);

    }


    /*
    | DELETE
    */
    public function delServer($id)
    {
        if(Server::where('id','=',$id)->delete())
            return redirect()->route('dracula.server.list')
                ->with('success',DB::table('systemsg')->where('code','=',7)->first()->msg);
        return redirect()->back()
        ->with('error',DB::table('systemsg')->where('code','=',8)->first()->msg);
    }

}
