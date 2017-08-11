<div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="/posts">Home</a>
          <a class="nav-link" href="#">New features</a>
          <a class="nav-link" href="#">Press</a>
          <a class="nav-link" href="#">New hires</a>
          <a class="nav-link" href="#">About</a>
          @if(auth()->check())
            <a class="nav-link" href="/logout">Logout</a>
            <a class="nav-link ml-auto" href="#">{{auth()->user()->name}}</a>
          @else
            <a class="nav-link" href="/login">Login</a>
          @endif
        </nav>
      </div>
 </div>