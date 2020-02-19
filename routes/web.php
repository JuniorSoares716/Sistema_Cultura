<?php

Route::get('/', 'SiteController@index')->name('site');
Route::get('/home', 'SiteController@index')->name('site');
Route::get('/cursos','SiteController@cursos')->name('site.cursos');

Auth::routes();


Route::group(['prefix'=>'admin', 'middleware' => 'auth'],function(){

    //Página Inicial do Administrador
        Route::get('/home', 'SiteController@home')->name('home');
	
    //Rotas de Cadastros
    	Route::group(['prefix'=>'cadastrar'],function(){

    		Route::get('agente', 'AgentesController@create')->name('agente.create');
     		Route::post('agente', 'AgentesController@store')->name('agente.store');

     		Route::get('curso','CursosController@create')->name('curso.create');
    		Route::post('curso','CursosController@store')->name('curso.store');
        });

	//Rotas de Listagem
        Route::group(['prefix'=>'pesquisar'],function(){

    	 	Route::get('agente', 'AgentesController@show')->name('agente.show');

    	 	Route::get('curso', 'CursosController@show')->name('curso.show');

            Route::get('curso/{id}', 'CursosController@pessoas')->name('curso.pessoas');
        });

    //Rotas de Exclusão
        Route::group(['prefix'=>'deletar'],function(){

            Route::get('agente/{id}', 'AgentesController@delete')->name('agente.delete');

            Route::get('curso/{id}','CursosController@delete')->name('curso.delete');

            Route::get('pessoa/{id}', 'PessoasController@delete')->name('pessoa.delete');

        });

        Route::get('curso/{id}/desmatricular/pessoa/{pessoa}', 'CursosController@desmatricular')->name('curso.desmatricular');

    //Rotas de Edição
       Route::group(['prefix'=>'editar'],function(){

            Route::get('agente/{id}', 'AgentesController@edit')->name('agente.edit');
            Route::post('agente/{id}', 'AgentesController@update')->name('agente.update');

            Route::get('curso/{id}', 'CursosController@edit')->name('curso.edit');
            Route::post('curso/{id}', 'CursosController@update')->name('curso.update');

            Route::get('pessoa/{pessoa}/{curso}', 'PessoasController@edit')->name('pessoa.edit');
            Route::post('pessoa/{pessoa}/{curso}', 'PessoasController@update')->name('pessoa.update');
        });
});

    //Rotas de Pessoas
Route::group(['prefix'=>'pessoa'],function(){

        //Rotas de cadastros de Pessoas
            Route::get('cadastrar', 'PessoasController@create')->name('pessoa.create');
            Route::post('cadastrar', 'PessoasController@store')->name('pessoa.store');

    // Rota de Matricula de Pessoas
        Route::get('{pessoa}/matricular/curso/{curso}', 'PessoasController@matricular')->name('pessoa.matricular');

    // Rota de Desmatricula de Pessoas
        Route::get('{pessoa}/desmatricular/curso/{curso}', 'PessoasController@desmatricular')->name('pessoa.desmatricular');

    // Rota de busca do e-mail
        Route::get('buscar/email', 'PessoasController@busca')->name('pessoa.busca');

});

