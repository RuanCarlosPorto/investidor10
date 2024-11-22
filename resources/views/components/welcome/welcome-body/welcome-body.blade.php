<div class="welcome-body">
  @foreach ($news as $newsData)
    <x-news.news-container.news-container :news="$newsData"/>
  @endforeach
</div>

<style>
  .welcome-body {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding-top: 2rem;
    background-color: #e4e4e4;
    min-height: 100vh;
  }
</style>