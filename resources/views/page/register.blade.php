@extends('layouts.app')

@section('content')
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <main class="max-w-md w-full space-y-8">
            <header>
                <img
                    class="mx-auto h-12 w-auto"
                    src="{{ asset('img/enjob-logo.svg') }}"
                >
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Cadastre-se e faça as oportunidades
                </h2>
            </header>

            <form
                class="mt-8 space-y-6 flex flex-col"
                action="{{ route('register.store') }}"
                enctype="multipart/form-data"
                method="POST"
            >
                @csrf

                <div class="flex justify-center items-center h-36 w-36 self-center">
                    <div class="relative h-full w-full border-2 border-dotted border-indigo-500 rounded-full bg-slate-100 flex justify-center items-center">
                        <div class="absolute p-3">
                            <h3 class="font-medium text-sm text-center text-zinc-700">
                                Adicione uma foto profissional
                            </h3>
                        </div>

                        <img
                            class="hidden h-[8.7rem] w-[8.7rem] object-cover rounded-full object-center border-2 border-indigo-600"
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                        >

                        <input
                            class="h-full w-full opacity-0 cursor-pointer"
                            type="file"
                            id="image"
                            name="image"
                            accept="image/png, image/gif, image/jpeg"
                        >
                    </div>
                </div>

                @error('image')
                    <p class="text-red-500 self-center">
                        Uma imagem de perfil deve ser adicionada
                    </p>
                @enderror

                <div class="flex flex-col">
                    <label
                        class="mb-2 text-zinc-700 font-medium"
                        for="fullname"
                    >
                        Nome Completo
                    </label>
                    <input
                        class="@if ($errors->get('fullname')) border-red-500 @else border-slate-300 @endif px-4 py-2 bg-slate-100 rounded-md outline-none border focus:outline-none focus:ring-2 focus:border-0 focus:ring-offset-1 focus:ring-slate-300"
                        type="text"
                        id="fullname"
                        name="fullname"
                        placeholder="Informe seu nome completo"
                        autocomplete="name"
                        value="{{ old('fullname') }}"
                    >

                    @error('fullname')
                        <p class="text-red-500 text-sm pt-1 pl-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-col">
                    <label
                        class="mb-2 text-zinc-700 font-medium"
                        for="services"
                    >
                        Diga para as pessoas qual serviço você oferece
                    </label>
                    <input
                        class="@if ($errors->get('services')) border-red-500 @else border-slate-300 @endif px-4 py-2 bg-slate-100 rounded-md outline-none border focus:outline-none focus:ring-2 focus:border-0 focus:ring-offset-1 focus:ring-slate-300"
                        type="text"
                        id="services"
                        name="services"
                        placeholder="Ex.: Instalo softwares no seu computador"
                        autocomplete="work"
                        value="{{ old('services') }}"
                    >

                    @error('services')
                        <p class="text-red-500 text-sm pt-1 pl-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-col">
                    <label
                        class="mb-2 text-zinc-700 font-medium"
                        for="about"
                    >
                        Fale um pouco sobre você
                    </label>
                    <textarea
                        class="@if ($errors->get('about')) border-red-500 @else border-slate-300 @endif min-h-[100px] px-4 py-2 bg-slate-100 rounded-md outline-none border focus:outline-none focus:ring-2 focus:border-0 focus:ring-offset-1 focus:ring-slate-300"
                        id="about"
                        name="about"
                        rows="4"
                        placeholder="As pessoas verão sua descrição então fale um pouco sobre você e como você pode oferecer um serviço incrível"

                    >
                    {{ old('about') }}</textarea>

                    @error('about')
                        <p class="text-red-500 text-sm pt-1 pl-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-col">
                    <label
                        class="mb-2 text-zinc-700 font-medium"
                        for="whatsapp"
                    >
                        Diga o seu Whatsapp
                    </label>
                    <input
                        class="@if ($errors->get('whatsapp')) border-red-500 @else border-slate-300 @endif px-4 py-2 bg-slate-100 rounded-md outline-none border focus:outline-none focus:ring-2 focus:border-0 focus:ring-offset-1 focus:ring-slate-300"
                        type="tel"
                        id="whatsapp"
                        name="whatsapp"
                        placeholder="Somente números. Ex.: 92994202905"
                        autocomplete="tel"
                        value="{{ old('whatsapp') }}"
                    >

                    @error('whatsapp')
                        <p class="text-red-500 text-sm pt-1 pl-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <button
                    class="relative w-full flex justify-center items-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    type="submit"
                >
                    Quero oportunidades
                </button>
            </form>
        </main>
    </div>
@endsection

@push('scripts')
    <script src="{{ mix('js/register.js') }}">

    </script>
@endpush
