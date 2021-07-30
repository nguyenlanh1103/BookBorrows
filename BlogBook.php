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
                    <p><strong>Blog Sách&nbsp;nơi trao gửi yêu thương</strong>&nbsp;(Tên gốc:&nbsp;Where the Crawdads Sing)&nbsp;tiểu thuyết đầu tay của nhà văn Delia Owens được xuất bản lần đầu năm 2018, 
                    nhưng đã nhanh chóng chiếm được sự yêu mến của đông đảo độc giả. Cuốn sách liên tục đứng trong danh sách bán chạy của New York Times suốt 58 tuần với 6 triệu bản được bán ra trên toàn thế giới&nbsp;và dẫn đầu mục tiểu thuyết bán chạy của Amazon trong năm 2019.</p>
                    <img data-thumb="original" original-height="290" original-width="555" src="//bizweb.dktcdn.net/100/415/471/files/xa-ngoai-kia-noi-loai-tom-hat-delia-owens-2.jpg?v=1614174912478">
                    
                    <p><?php echo $row['detail'];?></p>
                    <blockquote>
                        <p>“<em>Em hông biết ngôn từ có thể chứa đựng nhiều điều đến vậy. Em không biết một câu có thể đầy ắp như thế.”</em></p>
                        <p><em>Cậu mỉm cười. “Đó là một câu rất hay. Không phải câu từ nào cũng chứa đựng nhiều như vậy.”</em></p>
                    </blockquote>
                    
                    </div>
                </article>
            </div>
            <aside class="sidebar col-md-4 col-12 p-3 p-md-4">
                <div class="widget_b mb-3">
                    <a href="/tin-tuc" title="Bài viết liên quan: ">
                    <h3 class="widget-title">Bài viết liên quan: </h3>
                    </a>
                    <div class="widget-content latest-blog">
                    <div class="item_bl mt-2 mb-2">
                        <h3 class="title_blo"><a href="/review-sach-vo-cung-tan-nhan-vo-cung-yeu-thuong" title="Review sách Vô cùng tàn nhẫn vô cùng yêu thương">Review sách Vô cùng tàn nhẫn vô cùng yêu thương</a></h3>
                    </div>
                    <div class="item_bl mt-2 mb-2">
                        <h3 class="title_blo"><a href="/review-sach-luat-hap-dan-bi-mat-toi-cao" title="Review sách Luật hấp dẫn bí mật tối cao">Review sách Luật hấp dẫn bí mật tối cao</a></h3>
                    </div>
                    <div class="item_bl mt-2 mb-2">
                        <h3 class="title_blo"><a href="/review-sach-binh-tinh-khi-e-manh-me-khi-yeu-all-the-rules" title="Review sách Bình tĩnh khi ế, mạnh mẽ khi yêu - All The Rules">Review sách Bình tĩnh khi ế, mạnh mẽ khi yêu - All The Rules</a></h3>
                    </div>
                    <div class="item_bl mt-2 mb-2">
                        <h3 class="title_blo"><a href="/an-mang-muoi-mot-chu-higashino-keigo" title="Án mạng mười một chữ: Higashino Keigo">Án mạng mười một chữ: Higashino Keigo</a></h3>
                    </div>
                    <div class="item_bl mt-2 mb-2">
                        <h3 class="title_blo"><a href="/cuong-vong-phi-nhan-tinh" title="Cuồng vọng phi nhân tính">Cuồng vọng phi nhân tính</a></h3>
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
                    <h3 class="widget-title"> Bình luận </h3>
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
                    <h3 id="add-comment-title" class="widget-title">Viết bình luận</h3>
                    <form accept-charset="utf-8" action="/posts/review-sach-xa-ngoai-kia-noi-loai-tom-hat-cua-delia-owens/comments" id="article_comments" method="post" class="comment-form">
                        <input name="FormType" type="hidden" value="article_comments">
                        <input name="utf8" type="hidden" value="true">
                        <div class="row">
                            <div class="col-12 form-group">
                                <input type="text" class="form-control" placeholder="Tên*" title="Tên" id="user" name="Author" value="">
                            </div>
                            <div class="col-12 form-group">
                                <input class="form-control" title="Email" id="email" type="email" placeholder="Email*" name="Email" value="">
                            </div>
                        </div>
                        <div class="field aw-blog-comment-area form-group">
                            <textarea rows="5" cols="50" class="form-control" title="Bình luận" placeholder="Bình luận*" id="comment" name="Body"></textarea>
                        </div>
                        <div style="width:96%" class="button-set">
                            <input type="hidden" value="1" name="blog_id">
                            <button type="submit" class="book-submit btn btn-primary text-center d-flex align-items-center font-weight-boldt">Gửi bình luận</button>
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