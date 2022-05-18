@extends('layouts.app')

@section('content')
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <main class="max-w-md w-full space-y-8">
            <img
                class="mx-auto h-28 w-auto"
                src="https://icons.veryicon.com/png/o/miscellaneous/cloud-call-center/success-24.png"
            >

            <h2 class="text-xl sm:text-4xl font-semibold text-center text-zinc-900">
                Parabéns pelo cadastro 🎉
            </h2>

            <p class="text-center text-zinc-700 sm:text-lg">
                Agora é só aguardar que os clientes irão entrar
                em contato pelos seus serviços
            </p>

            <a
                class="relative w-full flex justify-center items-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('home') }}"
            >
                Voltar para Home
            </a>
        </main>
    </div>
@endsection
