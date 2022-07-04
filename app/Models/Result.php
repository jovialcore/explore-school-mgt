<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Prophecy\Promise\ReturnPromise;

class Result extends Model
{
    use HasFactory;

    protected $carrier = [];
    protected $boeing = [];

    protected $testArr = [];

    protected $fillable = ['student_id', 'class_id', 'assessment_total', 'exam_score', 'total_score', 'subject_id', 'session_id', 'term_id', 'school_id', 'subject'];

    public function admin()
    {
        return $this->hasMany(Admin::class);
    }
    public function pin()
    {

        return $this->hasOne(Pin::class);
    }

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function class()
    {
        return $this->hasOne(Klass::class);
    }

    public function session()
    {
        return $this->hasOne(Session::class);
    }


    public function school()
    {
        return $this->belongsTo(School::class);
    }


    public function term()
    {
        return $this->hasOne(Term::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }


    /**
     * Return results checked by the student via the student id
     */

    public static function DisplayResult($student, $class, $session)
    {
        $r = self::where('student_id', $student)->where('class_id', $class)->where('session_id', $session);
        if ($r->exists()) return  $r->get();
        else
            return false;
    }

    public function getAllResult($session, $class)
    {
        $this->carrier = self::where('class_id', $class)->where('session_id', $session)->with('subject')->get()->toArray();


        /*
             so here is where the code is selecting all the items in array with same index !
             this is where the unique identifier is happening !

             //always bear in mind that the code ran 3 times (no of iteractions) then for each iterations, it picked the menu names (aka index in our code above) for the respective arrays in $array base on its's keys [0,1,2] ! Hence aslong ad the keys are different...

             fun fact: naturally php don't like to reiterate over arrays with same keys two times !!! so thst is why the grouping is possible. php noticed that clients key appears twice, it just peruse over it or slides it or ignores it and still use the clients index for second iteration, then noticed that the sub_menu names are different so it adds that too to sub menu
             .

             It will work
             So in summary.

             1.Have differnt chief parent ids
             2. Pick a unique identifier
             3. Group it with by the virtue of a different sub menu name 

    */

        // dd($this->carrier);

        //let me write my onw 


        // dd($func([1,2,3]));
        $i = 0; //passed by reference ----Wisdom dy this my brain---I don dy sabi this thing 
        $myOwn = array_reduce($this->carrier, function ($accumulator, $item) use (&$i) {
            $index = $item['RegNum'];

            //if it is set is for the regnum..you are checking if the regnum is already existing 
            //if it is not set will make it do the iteration again inside 

            if (!isset($accumulator[$index])) {
                $i++;
                $accumulator[$index] = [
                    'id' => $item['id'],
                    'RegNum' => $item['RegNum'],
                    'submenu' => [],
                    'score' => 0
                ];
            }

            $subMenu = $accumulator[$index]['submenu'][$i] = [
                'id' => $item['id'],
                'total_score'=> $item['total_score'],
            ];
            if (isset($subMenu['total_score'])) {
                foreach ($accumulator[$index]['submenu'] as $key => $v) {
                    $accumulator[$index]['score'] =  $accumulator[$index]['score'] + $v['total_score'];
                }
            }

            // if (isset($accumulator[$index]['score']) && isset($subMenu['total_score' . $i])) {

            //     $accumulator[$index]['score'] =  $subMenu['total_score' . 1] +  ($subMenu['total_score' . $i+1] ?? 0)  ;
            // }
            return $accumulator;
        }, []);


        // $array =
        //     [
        //         [
        //             'a' => 1,
        //             'b' => 1,
        //             'c' => 1,
        //         ],
        //         [
        //             'a' => 2,
        //             'b' => 2,
        //         ],
        //         [
        //             'a' => 3,
        //             'd' => 3,
        //         ]
        //     ];

        // $result = array_reduce($array, function ($carry, $item) {
        //     foreach ($item as $k => $v)

        //         $carry[$k] = $v + ($carry[$k] ?? 0);


        //     return $carry;
        // }, []);


        // dd($result);

        dd($myOwn);

        /*
        Code comment:
        1. Start the accumulator with an empty array instead of the default null
        2. get the index or identifier for the grouping you want
        3. then create a new array with that identifier as your starting key while assigning new assoc array and items to it:  new keys and the values  
        4. then add an array to  the  submenu array inside index array 
        no 4 is the unique identifier so all indexes with clients index for example will be grouped togther
        */
    }
    // having the subjects, totalscore, etc in this format ["English","ogombo-campus"] i.e like json is the better approach         
    public function getTotalScore()
    {
        $arr = array_filter(collect($this->carrier)->pluck(['total_score'])->toArray());

        return array_reduce($arr, function ($b, $v) {
            return  $b + $v;
        });
    }

    public function getTotalNumberOfSubjects()
    {
        return $this->carrier['noOfSubjects'];
    }

    public function getAverage()
    {
        return $this->getTotalScore() / $this->getTotalNumberOfSubjects();
    }

    //     ErrorException
    // Trying to access array offset on value of type int

    //learn about interfaces, trait and absrtact classes 

}
