<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/010/themes/806477/assets/bootstrap-4-3-min.css?1616141527684">
    <link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/bootstrap_css.css?1625110379905">
    <link rel="stylesheet" href="css/ideal-image-slider.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/mew_article.scss.css?1625110379905">
	<link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/010/themes/806477/assets/main.scss.css?1616141527684">
    <link rel="stylesheet" href="http://bizweb.dktcdn.net/100/415/010/themes/806477/assets/bpr-products-module.css?1616141527684" rel="stylesheet" >
	<link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/mew_style_gb.scss.css?1617295694679">
	<link rel="stylesheet" href="https://bizweb.dktcdn.net/100/415/471/themes/804607/assets/mew_style_first.scss.css?1617295694679">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" media="all">
	<link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" media="all">
</head>
<body>
    <?php require_once('Header.php') ?>
    <?php 
        require('connect.php');
        $query = "SELECT * FROM books WHERE category_id = 7";
        $result = $conn->query($query);
        $row = mysqli_fetch_assoc($result);
        $sql = $conn->query("SELECT comments FROM id");
       
        
    ?>
    <div class="main container blogs col-12">
        <div class="row">
            <div class="col-main col-md-8 col-12 p-3 p-md-4">
                <article class="blog_entry clearfix">
                    <div class="entry-content text-justify rte">
                    <p><strong>Blog S??ch&nbsp;n??i trao g???i y??u th????ng</strong>&nbsp;(T??n g???c:&nbsp;Where the Crawdads Sing)&nbsp;ti???u thuy???t ?????u tay c???a nh?? v??n Delia Owens ???????c xu???t b???n l???n ?????u n??m 2018, 
                    nh??ng ???? nhanh ch??ng chi???m ???????c s??? y??u m???n c???a ????ng ?????o ?????c gi???. Cu???n s??ch li??n t???c ?????ng trong danh s??ch b??n ch???y c???a New York Times su???t 58 tu???n v???i 6 tri???u b???n ???????c b??n ra tr??n to??n th??? gi???i&nbsp;v?? d???n ?????u m???c ti???u thuy???t b??n ch???y c???a Amazon trong n??m 2019.</p>
                    <img data-thumb="original" original-height="290" original-width="555" src="//bizweb.dktcdn.net/100/415/471/files/xa-ngoai-kia-noi-loai-tom-hat-delia-owens-2.jpg?v=1614174912478">
                    
                    <p><?php echo $row['detail'];?></p>
                    <blockquote>
                        <p>???<em>Em h??ng bi???t ng??n t??? c?? th??? ch???a ?????ng nhi???u ??i???u ?????n v???y. Em kh??ng bi???t m???t c??u c?? th??? ?????y ???p nh?? th???.???</em></p>
                        <p><em>C???u m???m c?????i. ??????? l?? m???t c??u r???t hay. Kh??ng ph???i c??u t??? n??o c??ng ch???a ?????ng nhi???u nh?? v???y.???</em></p>
                    </blockquote>
                    
                    </div>
                </article>
            </div>
            <aside class="sidebar col-md-4 col-12 p-3 p-md-4">
                <div class="widget_b mb-3">
                    <a href="/tin-tuc" title="B??i vi???t li??n quan: ">
                    <h3 class="widget-title">B??i vi???t li??n quan: </h3>
                    </a>
                    <div class="widget-content latest-blog">
                    <div class="item_bl mt-2 mb-2">
                        <h3 class="title_blo"><a href="/review-sach-vo-cung-tan-nhan-vo-cung-yeu-thuong" title="Review s??ch V?? c??ng t??n nh???n v?? c??ng y??u th????ng">Review s??ch V?? c??ng t??n nh???n v?? c??ng y??u th????ng</a></h3>
                    </div>
                    <div class="item_bl mt-2 mb-2">
                        <h3 class="title_blo"><a href="/review-sach-luat-hap-dan-bi-mat-toi-cao" title="Review s??ch Lu???t h???p d???n b?? m???t t???i cao">Review s??ch Lu???t h???p d???n b?? m???t t???i cao</a></h3>
                    </div>
                    <div class="item_bl mt-2 mb-2">
                        <h3 class="title_blo"><a href="/review-sach-binh-tinh-khi-e-manh-me-khi-yeu-all-the-rules" title="Review s??ch B??nh t??nh khi ???, m???nh m??? khi y??u - All The Rules">Review s??ch B??nh t??nh khi ???, m???nh m??? khi y??u - All The Rules</a></h3>
                    </div>
                    <div class="item_bl mt-2 mb-2">
                        <h3 class="title_blo"><a href="/an-mang-muoi-mot-chu-higashino-keigo" title="??n m???ng m?????i m???t ch???: Higashino Keigo">??n m???ng m?????i m???t ch???: Higashino Keigo</a></h3>
                    </div>
                    <div class="item_bl mt-2 mb-2">
                        <h3 class="title_blo"><a href="/cuong-vong-phi-nhan-tinh" title="Cu???ng v???ng phi nh??n t??nh">Cu???ng v???ng phi nh??n t??nh</a></h3>
                    </div>
                    </div>
                </div>
                <div class="widget_b mb-3">
                    <a href="#" title="Mew BS">
                    <img alt="Mew BS" src="//bizweb.dktcdn.net/100/415/471/themes/804607/assets/bn_article.png?1625110379905">
                    </a>
                </div>
                <div class="comment-content widget_b" id="comments">
                    <div class="comments-wrapper">
                    <h3 class="widget-title"> B??nh lu???n </h3>
                    <div class="media mb-2">
                        <img class="mr-3 align-self-start" width="60" height="60" alt="avatar" src="https://www.gravatar.com/avatar/799f6f9e787a3a5e032f9c2d518279e0?d=identicon&amp;s=60">
                        <div class="media-body">
                            <h5 class="mt-0 mb-0 small font-weight-bold">Nguyen Lanh</h5>
                            <span class="d-block small font-italic">28/04/2021</span>
                            hiiiiiiiiiiiiiiiiii
                        </div>
                    </div>
                    </div>
                    <div class="comments-form-wrapper clearfix">
                    <h3 id="add-comment-title" class="widget-title">Vi???t b??nh lu???n</h3>
                    <form accept-charset="utf-8" action="/posts/review-sach-xa-ngoai-kia-noi-loai-tom-hat-cua-delia-owens/comments" id="article_comments" method="post" class="comment-form">
                        <input name="FormType" type="hidden" value="article_comments">
                        <input name="utf8" type="hidden" value="true">
                        <div class="row">
                            <div class="col-12 form-group">
                                <input type="text" class="form-control" placeholder="T??n*" title="T??n" id="user" name="Author" value="">
                            </div>
                            <div class="col-12 form-group">
                                <input class="form-control" title="Email" id="email" type="email" placeholder="Email*" name="Email" value="">
                            </div>
                        </div>
                        <div class="field aw-blog-comment-area form-group">
                            <textarea rows="5" cols="50" class="form-control" title="B??nh lu???n" placeholder="B??nh lu???n*" id="comment" name="Body"></textarea>
                        </div>
                        <div style="width:96%" class="button-set">
                            <input type="hidden" value="1" name="blog_id">
                            <button type="submit" class="book-submit btn btn-primary text-center d-flex align-items-center font-weight-boldt">G???i b??nh lu???n</button>
                        </div>
                    </form>
                    </div>
                </div>
            </aside>
        </div>
    </div>

    <?php require_once('Footer.php') ?>
</body>
</html>