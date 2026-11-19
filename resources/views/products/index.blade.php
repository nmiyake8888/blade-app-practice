<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>{{ $pageTitle }}</title>
    <style>
        body { font-family: sans-serif; margin: 20px;background-color: #555; color: #f8f8f8; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #485988; }
        .in-stock { color: #85ed9a; }
        .out-of-stock { color: #e78888; }
        .category { background-color: #77a9c4; padding: 2px 8px; border-radius: 4px; }
    </style>
</head>
<body>
    <h1>{{ $pageTitle }}</h1>
    <p>全{{ $products->count() }}件の商品があります。</p>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>商品名</th>
                <th>カテゴリ</th>
                <th>価格</th>
                <th>在庫状況</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->name }}</td>
                    <td><span class="category">{{ $product->category }}</span></td>
                    <td>¥{{ number_format($product->price) }}</td>
                    <td>
                        @if ($product->in_stock)
                            <span class="in-stock">在庫あり</span>
                        @else
                            <span class="out-of-stock">在庫なし</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">商品が登録されていません</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    @isset($lastUpdated)
        <p><small>最終更新: {{ $lastUpdated }}</small></p>
    @endisset
</body>
</html>
