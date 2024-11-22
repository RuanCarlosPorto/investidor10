<div class="news-container">
  <div class="title">
    {{$news->title}}
  </div>
  <div class="content">
    {{$news->content}}
  </div>
  <div class="controls">
    <a href="{{route('news', $news->id)}}" class="button">Acessar</a>
  </div>
</div>

<style>
  .news-container {
    background-color: white;
    padding: 1rem;
    border-radius: 8px;
    margin: 1rem;
    display: flex;
    justify-content: flex-start;
    flex-wrap: wrap;
    width: 20%;
    height: 450px;
    -webkit-box-shadow: 0px 2px 9px -3px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 0px 2px 9px -3px rgba(0, 0, 0, 0.75);
    box-shadow: 0px 2px 9px -3px rgba(0, 0, 0, 0.75);
    overflow-y: auto;
  }

  .news-container>.title {
    font-weight: bolder;
    font-size: 22px;
    width: 100%;
  }

  .news-container>.content {
    width: 100%;
    font-size: 14px;
    margin-top: 1rem;
  }

  .news-container>.controls {
    width: 100%;
    display: flex;
    justify-content: center;
    margin-top: 1rem;
  }

  .news-container>.controls>.button {
    width: 60%;
    height: 45px;
    background-color: #dedede;
    color: black;
    width: 100%;
    padding: 1rem;
    border-radius: 8px;
    margin: 1rem;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: 0.3s;
  }
</style>