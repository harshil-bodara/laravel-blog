<html>
    <head>
        <title>Company pagination</title>
    </head>
    <style>
        .page-item{
            display: inline-block;
            padding: 10px;
        }
    </style>
    <body>
       <div>
    @foreach($data as $item)
    <li>{{$item->id}}</li>
    <li>{{$item->company}}</li>
    <li>{{$item->user_id}}</li>
    @endforeach
       <div>

        <div>{{$data->links()}}</div>

        <?php print_r($data); ?>
    </body>
</html>