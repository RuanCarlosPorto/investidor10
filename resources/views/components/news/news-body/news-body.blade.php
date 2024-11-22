<div class="news-body">
  <h2 class="category">
    {{ $news->category->name }}
  </h2>
  <h1 class="title">
    {{ $news->title }}
  </h1>
  <h3 class="date">
    {{ $news->created_at->format('d/m/Y') }} {{ $news->created_at->format('H:i') }}
  </h3>
  <div class="content">
    {{ $news->content }}
  </div>
</div>

<style>
  .news-body {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-content: flex-start;
    padding-top: 2rem;
    background-color: #e4e4e4;
    min-height: 100vh;
  }

  .news-body .category {
    font-size: 1.5rem;
    font-weight: bold;
    color: #333;
    text-align: center;
    border-bottom: 2px solid #9b9b9b;
    padding: 0 1rem
  }

  .news-body .title {
    font-size: 2rem;
    font-weight: bold;
    color: #333;
    text-align: center;
    margin-top: 1rem;
    width: 100%
  }

  .news-body .date {
    font-size: 0.8rem;
    color: #333;
    text-align: center;
    width: 100%
  }

  .news-body .content {
    font-size: 1.2rem;
    color: #333;
    text-align: justify;
    margin-top: 3rem;
    width: 80%;
  }
</style>
