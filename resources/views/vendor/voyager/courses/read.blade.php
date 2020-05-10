@extends('voyager::master')

@section('page_title', $course->title)



@section('content')
    @php
        $progress = \App\Models\CourseProgress::where('user_id',auth()->id())->where('course_id',$course->id)->first();
    @endphp
    <div class="row card text-center" style="margin: 25px;padding: 5px 0 5px 0">
        <div class="col-md-2">
            <a href="{{route('module.courses',$course->module->slug)}}" class="btn btn-warning  col-sm-12">
                <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;
                Retour
            </a>
        </div>
        <h5  class="col-md-6 ">{{$course->title}} | <span style="font-weight: lighter">({{$course->nombre_chapitre. ' Chapitre (s)'}})</span></h5>

        <div class="col-md-2">
            @if ($progress && $progress->end_date== null)

                <a style="margin: 5px" href="{{route('courses.finish',$course->slug)}}" title="Marquer le cours comme fini" class="btn btn-info col-sm-12">
                    <span class="">J'ai terminé ce cours</span>
                </a>
            @else
                <a disabled onclick="return false;" style="margin: 5px" href="{{route('courses.finish',$course->slug)}}" title="Marquer le cours comme fini" class="btn  btn-success">
                    <i class="glyphicon glyphicon-check"></i> Cours terminé</span>
                </a>
            @endif
        </div>





    </div>

<iframe id="style-1" src ="{{ asset("storage/".json_decode($course->path)[0]->download_link) }}" style="width: 100%;height: 1000px"></iframe>
@stop

@section('javascript')
    <script>
    $(document).ready(function () {
    if (!$.browser.webkit) {
    $('.wrapper').html('<p>Sorry! Non webkit users. :(</p>');
    }
    });
    </script>
    @stop


@section('css')
    <style>

        #info
        {
            font-size: 18px;
            color: #555;
            text-align: center;
            margin-bottom: 25px;
        }

        a{
            color: #074E8C;
        }

        .scrollbar
        {
            margin-left: 30px;
            float: left;
            height: 300px;
            width: 100%;
            background: #F5F5F5;
            overflow-y: scroll;
            margin-bottom: 25px;
        }

        .force-overflow
        {
            min-height: 450px;
        }



        /*
         *  STYLE 1
         */

        #style-1::-webkit-scrollbar-track
        {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            border-radius: 10px;
            background-color: #F5F5F5;
        }

        #style-1::-webkit-scrollbar
        {
            width: 12px;
            background-color: #F5F5F5;
        }

        #style-1::-webkit-scrollbar-thumb
        {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
            background-color: #555;
        }

    </style>

    @stop

