<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="pt-3">Pathogend<sup><i class="far fa-registered" style="font-size: 14px;"></i></sup> Blog Posts</h1>
            </div>
        </div>
        <div class="row blogtitles content pt-4">
        </div>
    </div>
    <div class="row blogpost" style="display:none">
        <div class="col-md-12 content">
            <h1 class="text-center blogtitle"></h1>
            <div class="posts">
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    <?php
    if (isset($_GET['blogtitle'])) {?>
    var title = "<?php echo $_GET['blogtitle'] ?>";
    console.log(title);
    var url = "http://blogs.dijatek.com/wp-json/wp/v2/posts?slug=" + title;
    $.ajax(
        {
            data: "json",
            type: 'GET',
            url: url,
            success: function (data) {
                console.log(data);
                /*Grab the most recent post and display it first*/
                var response = data[0];
                var postedDate = moment(new Date(response.date)).format('M/DD/YYYY');
                var title = response.title.rendered;
                var content = response.content.rendered;
                if (response.better_featured_image == null) {
                    var feat_img = "<?= IMAGE_URL ?>placeholder.png";
                } else {
                    var feat_img = response.better_featured_image.media_details.sizes.medium_large.source_url;
                };
                /*var tag = response.tags*/
                $(".blogtitles").hide();
                $(".posts").append(

                "<div class='container-fluid'>" +
                    "<div class='row pt-3'>" +
                            "<div class='col-sm-4 text-center'><h2 class='pt-4'>" + title + "</h2><br> <p class='text-muted'>" + postedDate + "</p></div>" +
                             "<div class='col-sm-8'><img class='img-fluid' src=" + feat_img + " alt='...'></div>" +
                    "</div>" +

                    "<div class='row pb-5'>" +
                            "<div class='col-sm-2'></div>" +
                            "<div class='col-sm-8'><p>" + content + "</p><p><a href='./' class='btn btn-success'>Back to all posts</a></p></div>" +
                            "<div class='col-sm-2'></div>" +
                "</div>" +
                "</div>"



//                    "<div class='panel panel-default'>" +
//                    "<div class='panel-heading text-center'>" +
//                    "<h3 class='panel-title'>" + postedDate + ", " + title + "</h3>" +
//                    "</div>" +
//                    "<div class='panel-body'>" +
//                    "<p>" + content + "</p>" +
//                    "</div>" +
//                    "</div>" +
//                    "<p><a href='./' class='btn btn-success'>Back to all posts</a></p>"
                );
                $(".blogpost").show();
            }
        }
    );
    <?php } else { ?>
    $.ajax({
        data: "json",
        type: 'GET',
        url: 'http://blogs.dijatek.com/wp-json/wp/v2/posts?per_page=20',
        success: function (data) {
            console.log(data);
            /*Build title column with clickable titles that load the content*/
            console.log(data);  
            for (var i = 0; i < data.length; i++) {
                if (data[i].categories[0] ==2) {
                    console.log(data[i]);
                    var title = data[i].title.rendered;
                    var slug = data[i].slug;
                    var postedDate = moment(new Date(data[i].date)).format('M/DD/YYYY');
                    var excerpt = data[i].excerpt.rendered;

                    if (data[i].better_featured_image == null) {
                        var feat_img = "<?= IMAGE_URL ?>placeholder.png";
                    } else {
                        var feat_img = data[i].better_featured_image.media_details.sizes.medium_large.source_url;
                    };
                    $(".blogtitles").append(
                        "<div class='col-sm-4 pb-3'>" +
                        "<a href='http://localhost:8888/pathogend/public_html/blog/" + slug + "' class='card-link loadPosts faqlink' data-value='" + i + "'>" +
                        "<div class='card'>" +
                        "<img class='card-img-top img-fluid' src=" + feat_img + " alt='Card image cap'>" +
                        "<div class='card-block text-center'>" +
                        "<h4><a class='card-title loadPosts faqlink' data-value='" + i + "'>" + title + "</a></h4>" +
                        "<h6 class='card-subtitle mb-2 text-muted'>" + postedDate + "</h6>" +
                        "<p class='card-text'><small>" + excerpt +
                        "<p><a href='http://localhost:8888/pathogend/public_html/blog/" + slug + "' class='btn btn-purple' role='button'>Read More</a></p>" +
                        "</small>" +
                        "</p>" +
                        "</div>" +
                        "</div>" +
                        "</a>" +
                        "</div>"
                    )
                }
            }
        }
    });
    <?php } ?>
</script>


<!--<div class="container-fluid">-->
<!--<div class="row">-->
<!--    <div class="col-sm-5"></div>-->
<!--    <div class="col-sm-7"></div>-->
<!--</div>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="col-sm-2"></div>-->
<!--        <div class="col-sm-8"></div>-->
<!--        <div class="col-sm-2"></div>-->
<!---->
<!--    </div>-->
<!--</div>-->