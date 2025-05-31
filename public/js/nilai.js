const evaluations = [
  {
    dosen: "Dr. Budi Santoso",
    project: "Sistem Perpustakaan Digital",
    aspek: "Kelengkapan Fitur",
    nilai: 85,
    komentar: "Semua fitur dasar berjalan baik."
  },
  {
    dosen: "Prof. Ani Wijaya",
    project: "Aplikasi E-Commerce",
    aspek: "Tampilan Antarmuka",
    nilai: 90,
    komentar: "Desain UI sangat rapi dan mobile-friendly."
  },
  {
    dosen: "Dr. Rika Sari",
    project: "Sistem Absensi QR Code",
    aspek: "Keamanan & Validasi",
    nilai: 78,
    komentar: "Masih perlu ditingkatkan dari sisi otentikasi."
  }
];

function renderEvaluations() {
  const table = document.getElementById("evaluation-table");
  const search = document.getElementById("search-eval").value.toLowerCase();
  let total = 0;
  let count = 0;

  table.innerHTML = "";

  evaluations.forEach((eval) => {
    const match =
      eval.dosen.toLowerCase().includes(search) ||
      eval.project.toLowerCase().includes(search);

    if (match) {
      const row = document.createElement("tr");
      row.innerHTML = `
        <td>${eval.dosen}</td>
        <td>${eval.project}</td>
        <td>${eval.aspek}</td>
        <td><span class="highlight">${eval.nilai}</span></td>
        <td>${eval.komentar}</td>
      `;
      table.appendChild(row);
      total += eval.nilai;
      count++;
    }
  });

  document.getElementById("average-score").textContent = count > 0
    ? (total / count).toFixed(2)
    : "-";
}

document.addEventListener("DOMContentLoaded", () => {
  document.getElementById("search-eval").addEventListener("input", renderEvaluations);
  renderEvaluations();
});

