@extends('layouts.master')

@section('content')
<div class="row">

    <div id="main" class="s-content__main large-8 column">

        <article class="entry">

            <header class="entry__header">

                <h2 class="entry__title h1">
                    <a href="single.html" title="">Hey, We Love Open Sans!</a>
                </h2>

                <div class="entry__meta">
                    <ul>
                        <li>July 12, 2019</li>
                        <li><a href="#" title="" rel="category tag">Ghost</a></li>
                        <li>John Doe</li>
                    </ul>
                </div>
             
            </header>
            
            <div class="entry__content">
                <p>
                Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi 
                est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor 
                irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor 
                veniam consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa 
                occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in 
                adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.
                </p>
            </div> 

        </article> <!-- end entry -->

        <article class="entry">

            <header class="entry__header">

                <h2 class="entry__title h1">
                    <a href="single.html" title="">We Need Better Typography.</a>
                </h2>
            
                <div class="entry__meta">
                    <ul>
                        <li>July 11, 2019</li>
                        <li>
                            <a href="#" title="" rel="category tag">Wordpress</a>,
                            <a href="#" title="" rel="category tag">Ghost</a>
                        </li>
                        <li>Jane Doe</li>
                    </ul>
                </div>
             
            </header>

            <div class="entry__content">
                <p>
                Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi 
                est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor 
                irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor 
                veniam consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa 
                occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in 
                adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.
                </p>
            </div>

        </article> <!-- end entry -->

        <article class="entry">
           
            <header class="entry__header">

                <h2 class="entry__title h1">
                    <a href="single.html" title="">White Space Everywhere.</a>
                </h2>
            
                <div class="entry__meta">
                    <ul>
                        <li>July 10, 2019</li>
                        <li>
                            <a href="#" title="" rel="category tag">Joomla</a>,
                            <a href="#" title="" rel="category tag">Drupal</a>
                        </li>
                        <li>Naruto Uzumaki</li>
                    </ul>
                </div>

            </header>

            <div class="entry__content">
                <p>
                Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi 
                est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor 
                irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor 
                veniam consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa 
                occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in 
                adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.
                </p>
            </div> 

        </article> <!-- end entry -->

        <article class="entry">
           
            <header class="entry__header">

                <h2 class="entry__title h1">
                    <a href="single.html" title="">Simple And Minimalist Designs.</a>
                </h2>
            
                <div class="entry__meta">
                    <ul>
                        <li>July 09, 2019</li>
                        <li>
                            <a href="#" title="" rel="category tag">Ghost</a>
                        </li>
                        <li>Naruto Uzumaki</li>
                    </ul>
                </div>
             
            </header>

            <div class="entry__content">
                <p>
                Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor 
                sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat 
                enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco 
                magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum 
                adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa occaecat ut 
                laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat 
                in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud 
                sed sed.
                </p>
            </div> 

        </article> <!-- end entry -->

   </div> <!-- end main -->


   <div id="sidebar" class="s-content__sidebar large-4 column">

       <div class="widget widget--search">
          <h3 class="h6">Search</h3> 
          <form action="#">
             <input type="text" value="Search here..." onblur="if(this.value == '') { this.value = 'Search here...'; }" onfocus="if (this.value == 'Search here...') { this.value = ''; }" class="text-search">
             <input type="submit" value="" class="submit-search">
          </form>
       </div>

       <div class="widget widget--categories">
           <h3 class="h6">Categories.</h3> 
           <ul>
                <li><a href="#0" title="">Wordpress</a> (2)</li>
                <li><a href="#0" title="">Ghost</a> (14)</li>
                <li><a href="#0" title="">Joomla</a> (5)</li>
                <li><a href="#0" title="">Drupal</a> (3)</li>
                <li><a href="#0" title="">Magento</a> (2)</li>
                <li><a href="#0" title="">Uncategorized</a> (9)</li>
            </ul>
        </div>

        <div class="widget widget_text group">
            <h3 class="h6">Widget Text.</h3>

            <p>
            Lorem ipsum Ullamco commodo laboris sit dolore commodo aliquip incididunt fugiat esse dolor 
            aute fugiat minim eiusmod do velit labore fugiat officia ad sit culpa labore in consectetur 
            sint cillum sint consectetur voluptate adipisicing Duis irure magna ut sit amet reprehenderit.
            </p>
        </div>

        <div class="widget widget_tags">
            <h3 class="h6">Post Tags.</h3>

            <div class="tagcloud group">
                <a href="#0">Corporate</a>
                <a href="#0">Onepage</a>
                <a href="#0">Agency</a>
                <a href="#0">Multipurpose</a>
                <a href="#0">Blog</a>
                <a href="#0">Landing Page</a>
                <a href="#0">Resume</a>
            </div>
        </div>

        <div class="widget widget_popular">
            <h3 class="h6">Popular Post.</h3>

            <ul class="link-list">
                <li><a href="#">Sint cillum consectetur voluptate.</a></li>
                <li><a href="#">Lorem ipsum Ullamco commodo.</a></li>
                <li><a href="#">Fugiat minim eiusmod do.</a></li>
            </ul>
        </div>
       
   </div> <!-- end sidebar -->

</div> <!-- end row -->
@endsection