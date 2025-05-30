<div class="sidebar">
    <h4 class="mb-4 d-flex align-items-center">
        <i class="bi bi-box-seam-fill me-2 fs-4"></i>
        <span class="fw-semibold">InventoryApp</span>
    </h4>

    <ul class="nav flex-column">
        <li class="nav-item mb-2">
            <a href="{{ route('barangs.index') }}" class="nav-link text-white d-flex align-items-center">
                <i class="bi bi-card-list me-2"></i> Daftar Barang
            </a>
        </li>

        <li class="nav-item mt-4">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-light w-100 d-flex align-items-center justify-content-center">
                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                </button>
            </form>
        </li>
    </ul>
</div>
