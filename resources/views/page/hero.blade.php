@extends('layouts.app')

@section('content')

    <div class="flex min-h-screen">
        <main class="px-8 md:p-12 lg:px-16">
            <header class="mb-10">
                <x-navbar />
            </header>

            <h1 class="text-2xl sm:text-4xl text-gray-800 font-extrabold">
                Cadastre-se, publique-se
                <br> e ganhe muito
            </h1>

            <p class="my-20 sm:my-10 text-zinc-700 max-w-4xl">
                Com o Enjob você pode conseguir sair do vermelho e garantir várias
                oportunidades incríveis de trabalho autônomo sem burocracia.
                Deixe seus clientes procurarem pelo seu serviço.
            </p>

            <a
                href="#"
                class="flex justify-center items-center py-2 px-4 font-medium text-md border border-transparent rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            >
                Comece hoje mesmo
            </a>
        </main>

        <img
            class="hidden md:block basis-3/4 h-screen object-cover object-center"
            src="https://images.unsplash.com/photo-1528953030358-b0c7de371f1f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=651&q=80"
            alt="Trabalhador amolando chave em um esmeril"
        >
    </div>

@endsection
