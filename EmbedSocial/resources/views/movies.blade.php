<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>

</head>

<script>
    //     function getMovies(txtSearch){
    //        $.get('http://www.omdbapi.com/?apikey=f48446d8&s='+txtSearch,function (txtSearch) {
    //         //    console.log(txtSearch);
    //            let result = txtSearch;
    //         return result.Search;
    //        });
    //    }

    $(document).ready(function(){
        $('#formSubmit').click(function(e){
            e.preventDefault();
            $('#results').html('')
            let txtSearch= $('#txtSearch').val();

            $.get('http://www.omdbapi.com/?apikey=f48446d8&plot=short&t='+txtSearch,function (txtSearch) {
                //    console.log(txtSearch);
                let result = txtSearch;
                //console.log(result);


                $('#results').append(`<div>Title: ${result.Title}</div>,<div><img src=${result.Poster}></div> ,<div> Year: ${result.Year}</div> ,<div> IMDB-ID: ${result.imdbID}</div>
                  <div class="">Plot:${result.Plot}</div><br>`)

            });
        });
    });



</script>




<body>
<form action="" method="GET">
    <div class="row">
        <div class="col-lg-6 col-xs-6 col-md-4 col-lg-offset-3" id="searchForm">
            <p class="header">Search movie by title</p>
            <div class="input-group" >
                <input type="text" class="form-control" placeholder="Enter movie name" id="txtSearch"/>
                <div class="input-group-btn">
                    <button class="btn btn-primary" type="submit" id="formSubmit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </div>
            </div>
        </div>
        <div id="results" class="col-md-12">

        </div>
    </div>
</form>
</body>

</html>
