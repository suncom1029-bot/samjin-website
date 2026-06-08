<?php
// 목업 데이터

$company = [
    'name' => '(주)삼진엘앤디',
    'founded' => 1987,
    'established' => 1987,
    'address' => '경기도 화성시 동탄기흥로 64-17',
    'phone' => '031-379-2000',
    'fax' => '031-376-5830',
    'email' => 'contact@samjin.co.kr',
    'vision' => '세상을 바꾸는 새로운 기술, 삼진엘앤디',
    'description' => '삼진엘앤디는 1987년 설립하여 정밀금형기술을 바탕으로 성장해온 글로벌 중견기업입니다.',
];

$products = [
    [
        'id' => 1,
        'name' => 'Display 부품',
        'description' => '고품질 디스플레이 부품 및 솔루션',
        'image' => 'bn01_n.png'
    ],
    [
        'id' => 2,
        'name' => '2차전지',
        'description' => '2차 배터리 및 전지 제품',
        'image' => 'bn02_n.png'
    ],
    [
        'id' => 3,
        'name' => 'OA 제품',
        'description' => '사무기기 및 OA 솔루션',
        'image' => 'bn03_n.png'
    ],
    [
        'id' => 4,
        'name' => '신소재 사업',
        'description' => '혁신적 신소재 솔루션',
        'image' => 'bn04_n.png'
    ],
    [
        'id' => 5,
        'name' => '금형 & 핫런너',
        'description' => '정밀 금형 및 핫런너 기술',
        'image' => 'bn05_n.png'
    ],
    [
        'id' => 6,
        'name' => 'LGP',
        'description' => '광학 등 패널 및 LGP',
        'image' => 'bn06_n.png'
    ]
];

$news = [
    [
        'date' => '2025.05.20',
        'title' => '삼진엘앤디, 글로벌 시장 진출 가속화',
        'summary' => '신규 해외 사업장 개설 및 글로벌 파트너십 강화로 세계 시장 진출을 가속화하고 있습니다.',
        'link' => '#'
    ],
    [
        'date' => '2025.04.15',
        'title' => '2024 품질경영 우수기업 인증 획득',
        'summary' => '국제 표준 품질경영 시스템 인증으로 제품 품질 우수성을 입증하였습니다.',
        'link' => '#'
    ],
    [
        'date' => '2025.03.10',
        'title' => 'Display 부품 글로벌 공급 계약 체결',
        'summary' => '주요 글로벌 완성차업체와 장기 공급 계약을 체결하여 사업 기반을 확대하였습니다.',
        'link' => '#'
    ]
];

$stats = [
    [
        'value' => '39',
        'label' => '년 정밀 제조 업력',
        'description' => '1987년 설립 이후 정밀금형 기술의 여정'
    ],
    [
        'value' => '720',
        'label' => '명 글로벌 임직원',
        'description' => '한국·미국·멕시코·베트남 및 해외거점'
    ],
    [
        'value' => '44',
        'label' => '건 국내 특허',
        'description' => '특허청 등록·출원 포트폴리오'
    ],
    [
        'value' => '6',
        'label' => '개 해외 종속법인',
        'description' => '글로벌 제조·영업 거점'
    ]
];

$services = [
    [
        'title' => '경영이념 및 비전',
        'description' => '글로벌 경쟁력을 갖춘 정밀금형 기술의 리더',
        'icon' => ''
    ],
    [
        'title' => '핵심역량 및 기술',
        'description' => '첨단 기술 개발과 혁신적 솔루션 제공',
        'icon' => ''
    ],
    [
        'title' => '품질 & 환경방침',
        'description' => '세계 기준의 품질 및 친환경 경영',
        'icon' => ''
    ],
    [
        'title' => '수상 및 인증',
        'description' => '국제 표준 인증 및 업계 수상 이력',
        'icon' => ''
    ]
];

$cta_banners = [
    [
        'title' => '채용정보',
        'description' => '함께 성장할 인재를 모십니다',
        'link' => '#recruit',
        'icon' => ''
    ],
    [
        'title' => '고객문의',
        'description' => 'TEL. 031-379-2000',
        'link' => '#contact',
        'icon' => ''
    ],
    [
        'title' => '사이버신문고',
        'description' => '건전한 사업 환경을 위해',
        'link' => '#cyber',
        'icon' => ''
    ]
];

$ir_data = [
    'subtitle' => '투명한 소통을 통해 주주의 이익과 기업의 가치를 제고합니다.',
    'stock_price' => 1041,
    'price_change' => -22,
    'change_percent' => -2.07,
    'dividend_link' => '#dividend',
    'update_time' => '2026-06-08 15:30:00'
];

$ir_sections = [
    [
        'title' => 'IR 정보',
        'icon' => '📊',
        'link' => '/ir/info.php'
    ],
    [
        'title' => '주식 정보',
        'icon' => '📈',
        'link' => '/ir/stock.php'
    ],
    [
        'title' => '재무 정보',
        'icon' => '💹',
        'link' => '/ir/financial.php'
    ]
];

// ======================== IR 주식 정보 ========================
$stock_info = [
    'market_cap' => '327,000',
    'listed_date' => '2023.08.04',
    'trading_volume' => '1,234,567',
    'trading_amount' => '1,283,234,567',
    'avg_trading_volume' => '856,342',
    'high_52w' => 1450,
    'low_52w' => 875,
    'current_price' => 1041,
    'eps' => 156.45,
    'per' => 6.65,
    'pbr' => 0.98,
    'dividend_per_share' => 120,
    'dividend_yield' => 11.53,
    'volume_trend' => 'up',
    'foreign_ownership' => 15.3,
    'institutional_ownership' => 28.5,
    'individual_ownership' => 56.2,
    'price_range_52w' => [
        'high' => 1450,
        'low' => 875,
        'current' => 1041
    ]
];

// ======================== IR 재무 정보 ========================
$financial_data = [
    '2024' => [
        'revenue' => 847200,
        'operating_profit' => 68340,
        'net_income' => 54180,
        'assets' => 892450,
        'equity' => 667890
    ],
    '2025' => [
        'revenue' => 923500,
        'operating_profit' => 82450,
        'net_income' => 68970,
        'assets' => 956340,
        'equity' => 721450
    ],
    '2026_estimate' => [
        'revenue' => 1015600,
        'operating_profit' => 97340,
        'net_income' => 81250,
        'assets' => 1035890,
        'equity' => 789650
    ]
];

// ======================== 배당 정보 ========================
$dividend_history = [
    [
        'year' => '2025',
        'per_share' => 120,
        'payout_ratio' => 39.5,
        'dividend_yield' => 11.53,
        'ex_date' => '2026.03.15',
        'payment_date' => '2026.04.10'
    ],
    [
        'year' => '2024',
        'per_share' => 95,
        'payout_ratio' => 35.2,
        'dividend_yield' => 9.12,
        'ex_date' => '2025.03.10',
        'payment_date' => '2025.04.05'
    ],
    [
        'year' => '2023',
        'per_share' => 78,
        'payout_ratio' => 32.1,
        'dividend_yield' => 8.95,
        'ex_date' => '2024.03.12',
        'payment_date' => '2024.04.08'
    ]
];

// ======================== 분기별 실적 ========================
$quarterly_results = [
    [
        'quarter' => '2026년 1분기',
        'revenue' => 248500,
        'operating_profit' => 21340,
        'net_income' => 17850,
        'margin' => 8.58,
        'released_date' => '2026.05.15'
    ],
    [
        'quarter' => '2025년 4분기',
        'revenue' => 256300,
        'operating_profit' => 23450,
        'net_income' => 19620,
        'margin' => 9.14,
        'released_date' => '2026.02.28'
    ],
    [
        'quarter' => '2025년 3분기',
        'revenue' => 231400,
        'operating_profit' => 19280,
        'net_income' => 16100,
        'margin' => 8.34,
        'released_date' => '2025.11.15'
    ],
    [
        'quarter' => '2025년 2분기',
        'revenue' => 187300,
        'operating_profit' => 18380,
        'net_income' => 15400,
        'margin' => 9.81,
        'released_date' => '2025.08.14'
    ]
];

// ======================== 연간 주요 지표 ========================
$key_metrics = [
    'roa' => 7.2,           // Return on Assets
    'roe' => 10.5,          // Return on Equity
    'debt_ratio' => 25.3,   // 부채비율
    'current_ratio' => 1.8, // 유동비율
    'quick_ratio' => 1.4    // 당좌비율
];

// ======================== IR 공지사항 ========================
$ir_notices = [
    [
        'date' => '2026.06.08',
        'title' => '2026년 상반기 실적발표 안내',
        'content' => '삼진엘앤디는 2026년 상반기 경영실적을 발표합니다.',
        'link' => '#'
    ],
    [
        'date' => '2026.05.15',
        'title' => '제42기 정기주주총회 안내',
        'content' => '2026년 정기주주총회 개최 일정 및 권리내용을 안내합니다.',
        'link' => '#'
    ],
    [
        'date' => '2026.04.20',
        'title' => '2025년 배당금 지급 안내',
        'content' => '2025년 기말배당금 지급 일정을 안내합니다.',
        'link' => '#'
    ]
];
?>
