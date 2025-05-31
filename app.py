from flask import Flask, render_template

app = Flask(__name__)

@app.route("/")
def home():
    biodata = {
        "nama": "Devrin Anggun Saputri",
        "nim": "2211104001",
        "tempat_lahir": "Banjarnegara",
        "tanggal_lahir": "02 Mei 2004",
        "alamat": "Jl. Sherma Mukhlas, rt.01/RW.03, Karangtengah",
        "email": "devrinanggun90@gmail.com",
        "hobi": ["Membaca", "Menulis","Menonton drakor", "Mendengarkan musik"],
        "keahlian": ["Go", "Python", "Desain UI/UX"]
    }
    return render_template("biodata.html", data=biodata)

if __name__ == "__main__":
    app.run(debug=True)
