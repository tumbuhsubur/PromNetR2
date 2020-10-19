<?php
	//Nama Eka Januard Firdaus
	//NIM  19510006
	//Prodi Sistem Informasi 2019 
	//Universitas Gajayana Malang
	//PromnetR2
	//Tugas 1 Soal 1;
	function nilai_A (){
		echo "Selamat… proses belajarmu sangat baik, tingkatkan terus kemampuan codingnya…";
	}
	function nilai_B (){
		echo "Selamat… kamu sudah mulai memahami pemrograman PHP, tingkatkan terus skill codingmu…";
	}
	function nilai_C (){
		echo "Uppsssss….. skill kodingmu perlu diasah ini gaes, tetap semangat belajar dan eksplore kemampuan ya…";
	}
	echo "<br/>";
	$nilai = 41;
	$batasA = 85;
	$batasB = 70;
	$batasC = 59;
	echo "Nilai "; 
	echo $nilai;
	echo "<br/>";
	echo "<br/>";
	    if($nilai > $batasA){
	echo nilai_A();
		}elseif($nilai > $batasB){
	echo nilai_B();
		}elseif($nilai > $batasC){
	echo nilai_C();
		} else {
	echo "Nilai diluar batas";
	}
?>