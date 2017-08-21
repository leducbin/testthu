<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BIN BIN</title>
        <!-- Latest compiled and minified CSS & JS -->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{URL::asset('')}}">BIN BIN</a>
                </div>
        
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">{{ trans('home.home') }}</a></li>
                        <li><a href="#">{{ trans('home.about') }}</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{URL::asset('')}}language/vi">Tiếng Việt</a></li>
                        <li><a href="{{URL::asset('')}}language/en">Tiếng Anh</a></li>
                        <!-- <li><a href="{{URL::asset('')}}language/ja">Tiếng Nhật</a></li> -->
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-lf-offset-3 col-lg-6">
                    <table class="table table-striped">
                       <thead>
                         <tr>
                           <th>ID</th>
                           <th>{{ trans('home.name') }}</th>
                           <th>{{ trans('home.category') }}</th>
                           <th>{{ trans('home.datecreate') }}</th>
                           <th>{{ trans('home.dislay') }}</th>
                           <th>{{ trans('home.action') }}</th>
                         </tr>
                       </thead>
                       <tbody>
                       @if($lg == 'en')
                       @foreach($blog as $k=>$b)
                         <tr>
                           <td>{{ $b->id }}</td>
                           <td><?php echo json_decode($b->name_lang)->$lg; ?></td>
                           <td><?php 
                               $a = count(explode(",",$b->article_id));
                               $c = explode(",", $b->article_id);
                               $i = 0;
                               for($i;$i<$a;$i++){
                                   foreach ($article as $key => $value) {
                                               
                                                   if($c[$i] == $value->id)
                                                   {
                                                    echo json_decode($value->name_lang)->$lg;
                                                    echo "<br>";
                                                   }
                                            }
                                    }
                                   
                                ?></td>
                           <td>{{ $b['published_at'] }}</td>
                           <td><?php   ?></td>
                           <td>Doe</td> 
                         </tr>
                        @endforeach
                        @else
                        @foreach($blog as $k => $b)
                         <tr>
                           <td>{{ $b->id }}</td>
                           <td><?php echo json_decode($b->name_lang)->$lg; ?></td>
                           <td><?php 
                               $a = count(explode(",",$b->article_id));
                               $c = explode(",", $b->article_id);
                               $i = 0;
                               for($i;$i<$a;$i++){
                                   foreach ($article as $key => $value) {
                                               
                                                   if($c[$i] == $value->id)
                                                   {
                                                    echo json_decode($value->name_lang)->$lg;
                                                    echo "<br>";
                                                   }
                                            }
                                    }
                                ?></td>
                           <td>{{ $b->published_at }}</td>
                           <td>John</td>
                           <td>Doe</td> 
                         </tr>
                        @endforeach
                        @endif
                       </tbody>
                    </table>
                    
                       {{ $blog->links() }}
                </div>
            </div>
        </div>
        {{csrf_field()}}
        <script
          src="https://code.jquery.com/jquery-3.2.1.min.js"
          integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
          crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
            
        </script> 
    </body>
</html>