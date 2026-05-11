<x-app-layout>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');

    * { font-family: 'Plus Jakarta Sans', sans-serif; }

    body, .min-h-screen {
        background: #F8FAFC !important;
    }

    header { display: none !important; }

    nav {
        background: linear-gradient(90deg, #8B5CF6, #EC4899) !important;
        border-bottom: none !important;
        box-shadow: 0 4px 15px rgba(0,0,0,0.15) !important;
        backdrop-filter: none !important;
    }

    nav a {
        color: #FFFFFF !important;
        font-weight: 600;
        font-size: 0.875rem;
        letter-spacing: 0.01em;
    }

    nav a:hover { opacity: 0.8; color: #FFFFFF !important; }

    .py-6, .py-8 { padding-top: 0 !important; }


    .dash-wrapper {
        padding: 2.5rem 1.5rem 4rem;
        max-width: 1100px;
        margin: 0 auto;
        position: relative;
    }

    .dash-wrapper::before {
        content: '';
        position: fixed;
        top: -120px;
        left: 50%;
        transform: translateX(-50%);
        width: 700px;
        height: 400px;
        background: radial-gradient(ellipse, rgba(168,85,247,0.18) 0%, transparent 70%);
        pointer-events: none;
        z-index: 0;
    }

    .page-header {
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        margin-bottom: 2rem;
        position: relative;
        z-index: 1;
    }

    .page-title {
        font-size: 2rem;
        font-weight: 800;
        color: #111827;
        letter-spacing: -0.03em;
        line-height: 1;
    }

    .page-title span {
        background: linear-gradient(135deg, #8B5CF6, #EC4899);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .page-subtitle {
        color: #6B7280;
        font-size: 0.875rem;
        margin-top: 0.4rem;
        font-weight: 500;
    }

    .date-chip {
        font-size: 0.78rem;
        font-weight: 600;
        color: #7C3AED;
        background: rgba(124,58,237,0.08);
        border: 1px solid rgba(124,58,237,0.2);
        border-radius: 999px;
        padding: 0.35rem 1rem;
        letter-spacing: 0.02em;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        margin-bottom: 1.5rem;
        position: relative;
        z-index: 1;
    }

    .stat-card {
        background: #FFFFFF;
        border: 1px solid #E5E7EB;
        border-radius: 16px;
        padding: 1.4rem 1.5rem;
        transition: border-color 0.25s, transform 0.25s, box-shadow 0.25s;
        position: relative;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    .stat-card:hover {
        border-color: #C084FC;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(139,92,246,0.12);
    }

    .stat-label {
        font-size: 0.75rem;
        font-weight: 600;
        color: #9CA3AF;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        margin-bottom: 0.6rem;
    }

    .stat-value {
        font-size: 1.75rem;
        font-weight: 800;
        color: #111827;
        letter-spacing: -0.03em;
        line-height: 1;
    }

    .stat-value small {
        font-size: 1rem;
        font-weight: 600;
        color: #7C3AED;
        margin-right: 2px;
    }

    .stat-delta {
        font-size: 0.75rem;
        font-weight: 600;
        margin-top: 0.5rem;
        display: flex;
        align-items: center;
        gap: 3px;
    }

    .stat-delta.up { color: #059669; }
    .stat-delta.down { color: #DC2626; }

    .stat-icon {
        position: absolute;
        top: 1.2rem;
        right: 1.2rem;
        width: 36px;
        height: 36px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1rem;
        background: rgba(139,92,246,0.08);
    }

    .chart-card {
        background: #FFFFFF;
        border: 1px solid #E5E7EB;
        border-radius: 20px;
        padding: 1.75rem;
        position: relative;
        z-index: 1;
        box-shadow: 0 4px 16px rgba(0,0,0,0.06);
    }

    .chart-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.75rem;
    }

    .chart-title {
        font-size: 1rem;
        font-weight: 700;
        color: #111827;
        letter-spacing: -0.01em;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .chart-title-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: linear-gradient(135deg, #8B5CF6, #EC4899);
        box-shadow: 0 0 8px rgba(139,92,246,0.5);
    }

    .chart-badge {
        font-size: 0.72rem;
        font-weight: 700;
        color: #7C3AED;
        background: rgba(124,58,237,0.08);
        border: 1px solid rgba(124,58,237,0.2);
        border-radius: 999px;
        padding: 0.3rem 0.9rem;
        letter-spacing: 0.04em;
        text-transform: uppercase;
    }

    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(16px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    .page-header  { animation: fadeUp 0.4s ease both; }
    .stats-grid   { animation: fadeUp 0.4s 0.1s ease both; }
    .chart-card   { animation: fadeUp 0.4s 0.2s ease both; }

    nav button {
        color: #FFFFFF !important;
        font-weight: 600 !important;
        font-size: 0.875rem !important;
        background: rgba(255,255,255,0.15) !important;
        border: 1px solid rgba(255,255,255,0.3) !important;
        border-radius: 999px !important;
        padding: 0.4rem 1rem !important;
        transition: all 0.2s ease !important;
    }

    nav button:hover {
        background: rgba(255,255,255,0.25) !important;
    }

    nav button svg {
        stroke: #FFFFFF !important;
    }

    div[class*="absolute"][class*="right"] {
        background: #FFFFFF !important;
        border: 1px solid #E5E7EB !important;
        border-radius: 14px !important;
        box-shadow: 0 10px 30px rgba(0,0,0,0.12) !important;
        padding: 0.4rem !important;
        min-width: 180px !important;
        overflow: hidden !important;
        backdrop-filter: none !important;
    }

    div[class*="absolute"] a,
    div[class*="absolute"] button {
        color: #374151 !important;
        font-size: 0.875rem !important;
        font-weight: 500 !important;
        border-radius: 8px !important;
        padding: 0.55rem 0.9rem !important;
        display: block !important;
        width: 100% !important;
        text-align: left !important;
        background: transparent !important;
        border: none !important;
        transition: background 0.15s, color 0.15s !important;
    }

    div[class*="absolute"] a:hover,
    div[class*="absolute"] button:hover {
        background: #F3F4F6 !important;
        color: #7C3AED !important;
    }

    div[class*="absolute"] .border-t,
    div[class*="absolute"] hr {
        border-color: #E5E7EB !important;
        margin: 0.3rem 0 !important;
    }

    @media (max-width: 640px) {
        .stats-grid { grid-template-columns: 1fr; }
        .page-header { flex-direction: column; align-items: flex-start; gap: 0.75rem; }
        .stat-value { font-size: 1.4rem; }
    }
</style>

<div class="dash-wrapper">
    <div class="page-header">
        <div>
            <h1 class="page-title">Sales <span>Dashboard</span></h1>
            <p class="page-subtitle">Monthly performance overview · {{ date('Y') }}</p>
        </div>
        <div class="date-chip">📅 {{ date('F d, Y') }}</div>
    </div>

    @php
        $dataArr   = collect($data)->values()->toArray();
        $labelsArr = collect($labels)->values()->toArray();
        $total     = array_sum($dataArr);
        $peak      = max($dataArr);
        $peakMonth = $labelsArr[array_search($peak, $dataArr)];
        $average   = count($dataArr) > 0 ? $total / count($dataArr) : 0;
    @endphp

    <div class="chart-card">
        <div class="chart-header">
            <div class="chart-title">
                <span class="chart-title-dot"></span>
                Monthly Sales Overview
            </div>
            <span class="chart-badge">This Year</span>
        </div>
        <canvas id="salesChart" height="85"></canvas>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const labels = @json($labelsArr);
    const data   = @json($dataArr);

    const ctx = document.getElementById('salesChart').getContext('2d');

    const barGradient = ctx.createLinearGradient(0, 0, 0, 320);
    barGradient.addColorStop(0,   'rgba(139, 92, 246, 0.9)');
    barGradient.addColorStop(0.5, 'rgba(217, 70, 239, 0.75)');
    barGradient.addColorStop(1,   'rgba(236, 72, 153, 0.5)');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Total Sales',
                data: data,
                backgroundColor: barGradient,
                borderRadius: 8,
                borderSkipped: false,
                borderWidth: 0,
                hoverBackgroundColor: 'rgba(216, 180, 254, 0.95)',
            }]
        },
        options: {
            responsive: true,
            animation: { duration: 900, easing: 'easeOutQuart' },
            plugins: {
                legend: {
                    labels: {
                        color: '#374151',
                        font: { family: 'Plus Jakarta Sans', weight: '600', size: 12 },
                        boxWidth: 12,
                        boxHeight: 12,
                        borderRadius: 4,
                    }
                },
                tooltip: {
                    backgroundColor: '#1F2937',
                    titleColor: '#A78BFA',
                    bodyColor: '#F9FAFB',
                    borderColor: 'rgba(192,132,252,0.3)',
                    borderWidth: 1,
                    padding: 12,
                    cornerRadius: 10,
                    titleFont: { family: 'Plus Jakarta Sans', weight: '700' },
                    bodyFont: { family: 'Plus Jakarta Sans', weight: '500' },
                    callbacks: {
                        label: ctx => '  ₱' + ctx.parsed.y.toLocaleString()
                    }
                }
            },
            scales: {
                x: {
                    ticks: {
                        color: '#374151',
                        font: { family: 'Plus Jakarta Sans', weight: '600', size: 12 }
                    },
                    grid: { display: false },
                    border: { color: 'rgba(0,0,0,0.08)' }
                },
                y: {
                    beginAtZero: true,
                    ticks: {
                        color: '#6B7280',
                        font: { family: 'Plus Jakarta Sans', weight: '500', size: 11 },
                        callback: v => '₱' + v.toLocaleString()
                    },
                    grid: { color: 'rgba(0,0,0,0.05)' },
                    border: { dash: [4, 4], color: 'transparent' }
                }
            }
        }
    });
</script>
</x-app-layout>