@extends('template.index')

@section('content')
<p class="mb-5">
  <img src="{{ asset('assets/images/image_1.jpg')}}" alt="" class="img-fluid">
</p>

<h1 class="mb-3 h1">Article title</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.</p>
<p>Molestiae cupiditate inventore animi, maxime sapiente optio, illo est nemo veritatis repellat sunt doloribus nesciunt! Minima laborum magni reiciendis qui voluptate quisquam voluptatem soluta illo eum ullam incidunt rem assumenda eveniet eaque sequi deleniti tenetur dolore amet fugit perspiciatis ipsa, odit. Nesciunt dolor minima esse vero ut ea, repudiandae suscipit!</p>
<h2 class="mb-3 mt-5">#2. Creative WordPress Themes</h2>
<p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p>
<p class="mb-5">
  <img src="{{ asset('assets/images/image_2.jpg')}}" alt="" class="img-fluid">
</p>
<p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod, est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit, porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p>
<p>Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro explicabo soluta commodi libero voluptatem similique id quidem? Blanditiis voluptates aperiam non magni. Reprehenderit nobis odit inventore, quia laboriosam harum excepturi ea.</p>
<p>Adipisci vero culpa, eius nobis soluta. Dolore, maxime ullam ipsam quidem, dolor distinctio similique asperiores voluptas enim, exercitationem ratione aut adipisci modi quod quibusdam iusto, voluptates beatae iure nemo itaque laborum. Consequuntur et pariatur totam fuga eligendi vero dolorum provident. Voluptatibus, veritatis. Beatae numquam nam ab voluptatibus culpa, tenetur recusandae!</p>
<p>Voluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci quasi nemo a perspiciatis provident magni laboriosam repudiandae iure iusto commodi debitis est blanditiis alias laborum sint dolore. Dolores, iure, reprehenderit. Error provident, pariatur cupiditate soluta doloremque aut ratione. Harum voluptates mollitia illo minus praesentium, rerum ipsa debitis, inventore?</p>

 @include('tags._index', ['tags' => $post->tags])
 @include('authors._show', ['author' => $post->authors])




<div class="pt-5 mt-5">
  <h3 class="mb-5">3 Comments</h3>
  <ul class="comment-list">
    <li class="comment">
      <div class="comment-body">
        <h3>John Doe</h3>
        <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
      </div>
    </li>

    <li class="comment">
      <div class="comment-body">
        <h3>John Doe</h3>
        <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
      </div>
    </li>

    <li class="comment">
      <div class="comment-body">
        <h3>John Doe</h3>
        <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
      </div>
    </li>
  </ul>
  <!-- END comment-list -->

  <div class="comment-form-wrap pt-5">
    <h3 class="mb-5">Leave a comment</h3>
    <form action="#" class="p-5 bg-light" method="post">
      <div class="form-group">
        <label for="name">Name *</label>
        <input type="text" class="form-control" id="name">
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <input type="hidden" name="postId" value="4" />
        <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
      </div>

    </form>
  </div>
</div>

</div> <!-- .col-md-8 -->
<div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
<div class="sidebar-box">
  <form action="#" class="search-form">
    <div class="form-group">
      <span class="icon icon-search"></span>
      <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
    </div>
  </form>
</div>
@stop
