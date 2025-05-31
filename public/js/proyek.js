// ✅ Ambil data dari localStorage
function getData() {
  return JSON.parse(localStorage.getItem("projects") || "[]");
}

// ✅ Simpan data ke localStorage
function saveData(data) {
  localStorage.setItem("projects", JSON.stringify(data));
}

// ✅ Navigasi antar bagian
function showList() {
  document.getElementById("section-list").style.display = "block";
  document.getElementById("section-form").style.display = "none";
  document.getElementById("section-detail").style.display = "none";
  renderTable();
}

function showForm(id = null) {
  document.getElementById("section-list").style.display = "none";
  document.getElementById("section-form").style.display = "block";
  document.getElementById("section-detail").style.display = "none";

  const form = document.getElementById("project-form");
  form.reset();
  document.getElementById("edit-id").value = "";
  document.getElementById("form-title").textContent = id !== null ? "Edit Proyek" : "Tambah Proyek";

  if (id !== null) {
    const data = getData();
    const project = data[id];
    if (project) {
      document.getElementById("edit-id").value = id;
      form.title.value = project.title;
      form.student.value = project.student;
      form.supervisor.value = project.supervisor;
      form.status.value = project.status;
      form.start.value = project.start;
      form.end.value = project.end;
    }
  }
}

function showDetail(index) {
  const data = getData();
  const project = data[index];

  if (!project) return;

  document.getElementById("section-list").style.display = "none";
  document.getElementById("section-form").style.display = "none";
  document.getElementById("section-detail").style.display = "block";

  document.getElementById("d-title").textContent = project.title;
  document.getElementById("d-student").textContent = project.student;
  document.getElementById("d-supervisor").textContent = project.supervisor;
  document.getElementById("d-status").textContent = project.status;
  document.getElementById("d-period").textContent = `${project.start} - ${project.end}`;
}

// ✅ Render Tabel Proyek
function renderTable() {
  const data = getData();
  const tbody = document.getElementById("project-table");
  const keyword = document.getElementById("search").value.toLowerCase();

  tbody.innerHTML = "";

  data.forEach((proj, index) => {
    const match = proj.title.toLowerCase().includes(keyword) || proj.student.toLowerCase().includes(keyword);
    if (match) {
      const tr = document.createElement("tr");
      tr.innerHTML = `
        <td>${proj.title}</td>
        <td>${proj.student}</td>
        <td>${proj.status}</td>
        <td>${proj.start} - ${proj.end}</td>
        <td>
          <button onclick="showDetail(${index})">🔍</button>
          <button onclick="showForm(${index})">✏️</button>
          <button onclick="hapus(${index})">🗑️</button>
        </td>
      `;
      tbody.appendChild(tr);
    }
  });
}

// ✅ Hapus Proyek
function hapus(index) {
  if (confirm("Yakin ingin menghapus proyek ini?")) {
    const data = getData();
    data.splice(index, 1);
    saveData(data);
    renderTable();
  }
}

// ✅ Event Listener saat halaman selesai dimuat
document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("project-form");
  const search = document.getElementById("search");

  if (search) {
    search.addEventListener("input", renderTable);
  }

  if (form) {
    form.addEventListener("submit", (e) => {
      e.preventDefault();

      const data = getData();
      const editId = document.getElementById("edit-id").value;
      const newProject = {
        title: form.title.value.trim(),
        student: form.student.value.trim(),
        supervisor: form.supervisor.value.trim(),
        status: form.status.value,
        start: form.start.value,
        end: form.end.value,
      };

      if (editId) {
        data[editId] = newProject;
      } else {
        data.push(newProject);
      }

      saveData(data);
      showList();
    });
  }

  // Tampilkan daftar saat halaman pertama kali dimuat
  showList();
});

window.showForm = showForm;
window.showList = showList;
window.showDetail = showDetail;
window.hapus = hapus;
