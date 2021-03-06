<!-- https://getbootstrap.com/docs/4.1/examples/dashboard/# -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/admin">Панель управления</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Поиск" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="{!!route('logout')!!}">Выйти</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="/admin">
                  <span data-feather="home"></span>
                  Главная <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{!!route('categories')!!}">
                  <span data-feather="file"></span>
                  Категории
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{!!route('articles')!!}">
                  <span data-feather="shopping-cart"></span>
                  Продукты
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{!!route('users')!!}">
                  <span data-feather="users"></span>
                  Пользователи
                </a>
              </li>
              <hr align="center" width="90%" size="50" color="#dddddd" />
              <li class="nav-item">
                <a class="nav-link" href="{!!route('account')!!}">
                  <span data-feather="sait"></span>
                  Перейти на сайт
                </a>
              </li>
<!--               <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Отзывы
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li> -->
            </ul>

          </div>
        </nav>

       @yield('content')

      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    <script src="/js/bootstrap.min.js"></script>


    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    @yield('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>
