@extends('layout')

@section('content')
<section class="container mx-auto">
<H1 class="text-center text-4xl font-bold">WORKS</H1>
<div class="grid grid-cols-5 gap-x-15 gap-y-9">
  <div class= "object-none object-left-top">
  <img class="w-full h-22 hidden md:block" src="https://i.ibb.co/db7DVMs/works1.jpg">
  </div>
  <div></div>
  <div>
      <img class='object-fill w-full h-22 hidden md:block transform hover:-translate-y-1 hover:scale-110' src="https://i.ibb.co/7G5W7SK/Screenshot-2021-02-03-piano-1.png">
  </div>
  <div></div>
  <div><img src="https://i.ibb.co/mCQjDqL/Screenshot-2021-02-03-Opdracht-6.png"></div>
  <div><H3 class=' font-bold text-center'>SPOEDOPDRACHT</H3>
  <p class= "text-center">Dit is de spoedopdracht van periode 5. Ik heb deze gekozen omdat ik het een leuke opdracht vond omdat je hem moest nabouwen aan de hand van een psd bestand.</p></div>
  <div></div>
  <div><H3 class=' font-bold text-center'>PIANO</H3>
  <p class= "text-center">Dit is de piano opdracht van periode 1 javascript. Ik heb deze gekozen omdat ik vond dat je veel vrijheid had om de geluidjes te kiezen en de toetsen kleurtjes te geven dat vond ik het leukste aan deze opdracht.</p></div>
  <div></div>
  <div><H3 class=' font-bold text-center'>TREINBORD</H3>
  <p class= "text-center">Dit is de zesde opdracht van web uit periode 1. Deze opdracht is gekozen omdat ik het voor de eerste periode een redelijk lastige opdracht vond en ook wel een beetje een test dus ik heb hem gekozen omdat dit een opdracht was waar ik echt wel voor moest gaan zitten en hard werken tegenover de andere relatief makkelijke opdrachtn uit periode 1.</p></div>
</div>
</section>
@endsection

