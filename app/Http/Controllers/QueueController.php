    <?php

    namespace App\Http\Controllers;

    use App\Jobs\SendWelcomeEmailJob;
    use Illuminate\Http\Request;


    class QueueController extends Controller
    {
        public function index()
        {
            return view('queue.index');
        }

        public function sendMail(Request $request)
        {
            $request->validate(['email' => 'required|email']);
            SendWelcomeEmailJob::dispatch($request->email);
            return back()->with('success', 'Job dispatched successfully!');
        }

    }
