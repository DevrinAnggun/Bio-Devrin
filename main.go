package main

import (
	"html/template"
	"log"
	"net/http"
)

type Biodata struct {
	Nama         string
	NIM          string
	TempatLahir  string
	TanggalLahir string
	Alamat       string
	Email        string
	Hobi         []string
	Keahlian     []string
}

func main() {
	http.HandleFunc("/", biodataHandler)
	log.Println("Server running at http://localhost:8080")
	log.Fatal(http.ListenAndServe(":8080", nil))
}

func biodataHandler(w http.ResponseWriter, r *http.Request) {
	data := Biodata{
		Nama:         "Devrin Anggun Saputri",
		NIM:          "2211104001",
		TempatLahir:  "Yogyakarta",
		TanggalLahir: "10 Januari 2004",
		Alamat:       "Jl. Merdeka No. 45, Sleman",
		Email:        "devrin.saputri@example.com",
		Hobi:         []string{"Membaca", "Menulis", "Mendengarkan musik"},
		Keahlian:     []string{"Go", "Python", "Desain UI/UX"},
	}

	tmpl, err := template.ParseFiles("template.html")
	if err != nil {
		http.Error(w, "Template error: "+err.Error(), http.StatusInternalServerError)
		return
	}
	tmpl.Execute(w, data)
}
