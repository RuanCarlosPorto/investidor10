<div class="news-create-body">
  <div class="form">
    <h1 class="title">
      Criar Notícia
    </h1>
    <div class="content">
      <form action="{{ route('news.create') }}" method="POST" class="form">
        @method('POST')
        @csrf
        <x-forms.text-input.text-input name="title" label="Título"/>
        <x-forms.text-input.text-input name="content" label="Conteúdo"/>

        <x-forms.custom-select.custom-select name="category_id" label="Categoria" :options="$categories->map(function($category) {
          return [
            'value' => $category->id,
            'label' => $category->name,
          ];
        })"/>

        <button type="submit" class="button">Criar</button>

        @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        @error('content')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </form>
    </div>
  </div>
</div>

<style>
  .news-create-body {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-content: flex-start;
    padding-top: 2rem;
    background-color: #e4e4e4;
    min-height: 100vh;
  }

  .news-create-body > .form {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    width: 100%;
    max-width: 800px;
    padding: 1rem;
    background-color: #fff;
    border-radius: 5px;
    -webkit-box-shadow: 0px 2px 9px -3px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 0px 2px 9px -3px rgba(0, 0, 0, 0.75);
    box-shadow: 0px 2px 9px -3px rgba(0, 0, 0, 0.75);
  }

  .news-create-body > .form > .title {
    width: 60%;
    text-align: center;
    font-size: 1.5rem;
    margin-bottom: 1rem;
    border-bottom: 1px solid lightgrey;
  }

  .news-create-body > .form > .content {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-content: flex-start;
  }

  .news-create-body > .form > .content > .form {
    width: 100%;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
  }

  .news-create-body > .form > .content > .form .text-input, .news-create-body > .form > .content > .form .custom-select {
    width: 50%;
    margin: .5rem
  }

  .news-create-body > .form > .content > .form .button {
    width: 50%;
    margin: .5rem;
    padding: .5rem;
    background-color: #677686;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .news-create-body .alert-danger {
    display: flex;
    justify-content: center;
    width: 100%;
    color: red;
  }
</style>