<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://unpkg.com/bootstrap@4.1.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
<link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">


<!doctype html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Sharer Coach</title>
<style>
    .square {

        border: 2px solid black;

        text-align: center;

        width: 100%;

        height: 25vw;

    }
</style>
<div class="row" style="padding: 10px;">
    <div class="col-lg-12 col-md-12 ">
        <form>
            <div class="row form-group">
                <div class="col-md-2 text-center">
                    <label>List</label>
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="searchList">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-2 text-center">
                    <label>ค้าหา</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="searchNum">
                </div>
                <div class="col-md-2">
                    <button type="button" id="search" class="btn btn-primary">ค้นหา</button>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12 text-center">
                    <label>ประเภทการค้นหา</label>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-2 text-center">
                </div>
                <div class="col-md-8 text-center">
                    <select class="form-control" name="searchType" id="searchType">
                        <option value="Liner">
                            Liner Search
                        </option>
                        <option value="Binary">
                            Binary Search
                        </option>
                        <option value="Bubble">
                            Bubble Search
                        </option>
                    </select>
                </div>
                <div class="col-md-2 text-center">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <label for="test">ผลลัพธ์</label>
                    <!-- <textarea class="form-control" id="textResult" rows="10"></textarea> -->
                    <div id="test" class="square">
                </div>
                <div class="col-md-1"></div>
            </div>
       
            </div>
        </form>
    </div>
</div>
<script>
    jQuery('#search').on('click', function() {
        var searchList = jQuery('#searchList').val();
        var searchNum = jQuery('#searchNum').val();
        var searchType = jQuery('#searchType').val();
        //   alert(searchList);
        //    alert(searchNum);
        //    alert(searchType);
        jQuery.ajax({
            type: 'POST',
            url: 'programmerTest1Admin.php',
            data: {
                searchList: searchList,
                searchNum: searchNum,
                searchType: searchType
            },
            beforeSend: function() {
                jQuery('#test').html('<div class="text-center"><i class="fas fa-spinner fa-pulse fa-6x"></i></div>');
            },
            success: function(returnData) {
                // window.location = 'testShippopAdmin.php';
                //    alert(returnData);
                jQuery('#test').html(returnData);
            }
        });
    });
</script>