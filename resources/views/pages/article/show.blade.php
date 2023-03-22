@extends('layouts.app')

@section('content')
    <article>
        <h1 class="entry-title">
            {{ $article->title }}
        </h1>
        <div class="post-full-width">
            <!-- <iframe
                                                    src="https://player.vimeo.com/video/150685211"
                                                    width="640"
                                                    height="360"
                                                    allowfullscreen="allowfullscreen"
                                                ></iframe> -->
            <center>
                <img src="https://contenthub-static.grammarly.com/blog/wp-content/uploads/2017/11/how-to-write-a-blog-post.jpeg"
                    alt="" width="60%" />
            </center>
        </div>
        <div class="center-relative clear">
            <div class="post-info">
                <div class="cat-links">
                    <ul>
                        <li>
                            <a href="#">OS X</a>
                        </li>
                    </ul>
                </div>
                <div class="post-author">
                    Penulis: <a href="#">{{ Auth::user()->name }}</a>
                </div>
                <div class="post-date">Publish: {{ $article->created_at }}</div>
                <div class="post-read-time">Read time: 1/2 h</div>
            </div>

            <div class="entry-content">
                <div class="content-wrap">
                    <p>
                        Now when I had mastered the language of this
                        water and had come to know every trifling
                        feature that bordered the great river as
                        familiarly as I knew the letters of the
                        alphabet, I had made a valuable acquisition.
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        I still keep in mind a certain wonderful
                        sunset which I witnessed when and
                        steamboating was new to me. A broad expanse
                        of the river was turned too blood in the
                        middle distance the red hue brightened into
                        gold, through which a solitary log came
                        floating, black and conspicuous in one place
                        a long calm slanting mark lay sparkling upon
                        the water in another the surface was broken
                        by boiling, tumbling rings, that were as
                        many-tinted as an opal where the ruddy flush
                        was faintest, was a smooth spot that was
                        covered with graceful circles and radiating
                        lines.
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        Ever so delicately traced the shore on our
                        left was densely wooded, and the som ber
                        shadow that fell from this forest was broken
                        in one place by a long, ruffled trail that
                        shone like silver and high above the forest
                        wall.
                    </p>
                    <!-- <blockquote class="inline-blockquote">
                                                            <p>There were graceful curves, reflected images, woody on the heights, soft distances and over the whole scene, far and near, the dissolving lights drifted steadily now dissolving lights. There were graceful curves, reflected images. It suddenly struck me that that tiny pea, pretty and blue, was the Earth.</p>
                                                        </blockquote> -->
                    <p>
                        But as I have said, a day came when I began
                        to cease from noting the glories and the
                        charms which the moon and the sun and the
                        twilight wrought upon the river’s face
                        another day came when I ceased altogether to
                        note them. Then, if that sunset scene had
                        been repeated, I should have looked upon it
                        without rapture, and should have commented
                        upon it, inwardly, after this fashion. But
                        as I have said, a day came when I began to
                        cease from noting the glories and the charms
                        which the moon and the sun and the twilight
                        wrought upon the one graceful curves,
                        reflected images, woody heights, soft
                        distances and over the whole sun scene, far
                        and near, the dissolving lights drifted
                        steadily, enriching it, every passing the
                        moment, with new marvels of coloring. The
                        world was new to me, and I had never seen
                        anything like this at home. But as I have
                        said, a day came when I began to cease from
                        noting the glories and the charms which the
                        moon and the sun and the twilight wrought
                        upon the river’s face another day came when
                        I ceased altogether to note them. Then, if
                        that sunset scene had been repeated, I
                        should have looked upon it without rapture,
                        and should have commented upon it, inwardly,
                        after this fashion.
                    </p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <div class="clear"></div>
                </div>
                <!-- <div class="post-full-width">
                                                        <iframe
                                                            src="https://player.vimeo.com/video/150685211"
                                                            width="640"
                                                            height="360"
                                                            allowfullscreen="allowfullscreen"
                                                        ></iframe>
                                                    </div> -->
                <div class="content-wrap">
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>
                        Duis iaculis mattis rutrum. Sed iaculis
                        magna sit amet suscipit ornare. Nulla ornare
                        leo a tortor aliquam, quis interdum ex
                        tempor. Quisque ultricies consequat
                        suscipit. Donec tincidunt tempor ornare.
                        Praesent a enim vel augue suscipit auctor in
                        gravida augue. Suspendisse ut libero sit
                        amet augue molestie fringilla. Fusce
                        molestie, velit a finibus eleifend, nibh
                        odio sagittis est, id aliquet turpis orci
                        quis nibh.
                    </p>
                    <p>&nbsp;</p>
                    <p>
                        Duis iaculis mattis rutrum. Sed iaculis
                        magna sit amet suscipit ornare. Nulla ornare
                        leo a tortor aliquam, quis interdum ex
                        tempor. Quisque ultricies consequat
                        suscipit. Donec tincidunt tempor ornare.
                        Praesent a enim vel augue suscipit auctor in
                        gravida augue. Suspendisse ut libero sit
                        amet augue molestie fringilla. Fusce
                        molestie, velit a finibus eleifend, nibh
                        odio sagittis est, id aliquet turpis orci
                        quis nibh.
                    </p>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </article>
    <!-- komentar sebelumnya -->
    <hr />
    <div class="one_half">
        <div>
            <span style="font-weight: bolder">Andi Gigatera</span>
            <p>Mantap mentong hahhaha</p>
        </div>
        <div>
            <span style="font-weight: bolder">Andi Gigatera</span>
            <p>bagus tawwwa, sangat menginspirasi</p>
        </div>
        <div>
            <span style="font-weight: bolder">Andi Gigatera</span>
            <p>Mantap mentong hahhaha</p>
        </div>
    </div>
    <!-- kirim komentar -->
    <div class="one_half last">
        <div class="contact-form">
            <p>
                <input id="name" type="text" name="your-name" placeholder="Nama" />
            </p>
            <p>
                <input id="contact-email" type="email" name="your-email" placeholder="Email" />
            </p>
            <p>
                <textarea id="message" name="your-message" placeholder="Komentar"></textarea>
            </p>
            <p>
                <input type="submit" onClick="SendMail()" value="KIRIM" />
            </p>
        </div>
    </div>
    <div class="nav-links">
        <div class="nav-previous">
            <p class="nav-previous-text">PREVIOUS STORY</p>
            <a href="#" rel="prev">Two ghostly white figures in coveralls</a>
        </div>
        <div class="nav-next">
            <p class="nav-next-text">NEXT STORY</p>
            <a href="#" rel="next">I had made a valuable acquisition</a>
        </div>
        <div class="clear"></div>
    </div>
@endsection
