@extends('Layouts.app')

@section('title-block')
Это сайт, сделанный при помощи фреймворка laravel (PHP)
@endsection

@section('top')
	<h1>HOME (О сайте, домашняя страница):</h1>
@endsection



@section('h2-block')
	<h2>Это - контент данной страницы:</h2>
@endsection

@section('aside')
	@parent
		<p>Дополнение к панели на HOME</p>
@endsection


@section('content')
 Вне всяких сомнений, Laravel has wonderful, thorough documentation covering every aspect of the framework. <br/>И вообще, это - очень удобный и многофункциональный фреймворк, насколько я понял. Поэтому я сделал этот сайт - чисто для пробы и понимания, что же такое Laravel. Серьезный сайт для себя на нем я, естественно, делать не буду. Потому как в этом фреймворке - абстракция на абстракции и абстракцией погоняет. Это требует, по идее, немалых ресурсов от компьютера. Да и, честно говоря, не слишком доверяю я уровню его безопасности - тоже в силу наличия большого количества абстракций (тут и запутаться недолго, в том числе - и разработчику этого фреймворка). Поэтому я специально сделал его на домене, который не жалко. А вот для тех, кого устраивают сайты, выполненные на Laravel - да, вполне можно делать. Ибо - удобно и сравнительно быстро. <br/><br/>
	Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. 
@endsection

