<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Order | Payment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .order-form-container {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(12px);
            border-radius: 24px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            padding: 48px;
            width: 100%;
            max-width: 520px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .order-form-container:hover {
            transform: translateY(-8px);
            box-shadow: 0 32px 64px -16px rgba(0, 0, 0, 0.3);
        }
        
        .form-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .form-icon {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            width: 88px;
            height: 88px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            box-shadow: 0 12px 24px rgba(102, 126, 234, 0.3);
            transition: transform 0.3s ease;
        }
        
        .form-icon:hover {
            transform: scale(1.05) rotate(5deg);
        }
        
        .form-icon i {
            font-size: 40px;
            color: white;
        }
        
        .form-header h2 {
            color: #1a202c;
            font-size: 32px;
            font-weight: 800;
            margin-bottom: 12px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .form-header p {
            color: #718096;
            font-size: 16px;
            font-weight: 500;
        }
        
        .form-group {
            margin-bottom: 28px;
        }
        
        .form-label {
            display: block;
            color: #4a5568;
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
            letter-spacing: -0.3px;
        }
        
        .form-label i {
            color: #667eea;
            width: 20px;
            text-align: center;
        }
        
        .form-input {
            width: 100%;
            padding: 18px 22px;
            border: 2px solid #e2e8f0;
            border-radius: 16px;
            font-size: 16px;
            color: #2d3748;
            background-color: #f8fafc;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        
        .form-input:focus {
            outline: none;
            border-color: #667eea;
            background-color: white;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.15);
            transform: translateY(-2px);
        }
        
        .form-input::placeholder {
            color: #a0aec0;
            font-weight: 400;
        }
        
        .input-with-icon {
            position: relative;
        }
        
        .currency-icon {
            position: absolute;
            left: 22px;
            top: 50%;
            transform: translateY(-50%);
            color: #667eea;
            font-weight: 600;
            font-size: 18px;
        }
        
        .amount-input {
            padding-left: 50px !important;
        }
        
        .select-wrapper {
            position: relative;
        }
        
        .select-wrapper:after {
            content: '\f078';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            right: 22px;
            top: 50%;
            transform: translateY(-50%);
            color: #667eea;
            pointer-events: none;
            font-size: 14px;
        }
        
        select.form-input {
            appearance: none;
            cursor: pointer;
            padding-right: 50px;
        }
        
        .submit-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 16px;
            padding: 20px 32px;
            font-size: 18px;
            font-weight: 700;
            width: 100%;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 14px;
            margin-top: 16px;
            box-shadow: 0 12px 24px rgba(102, 126, 234, 0.3);
            letter-spacing: -0.3px;
        }
        
        .submit-btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 32px rgba(102, 126, 234, 0.4);
            letter-spacing: 0.5px;
        }
        
        .submit-btn:active {
            transform: translateY(-1px);
        }
        
        .submit-btn i {
            transition: transform 0.3s ease;
        }
        
        .submit-btn:hover i {
            transform: translateX(5px);
        }
        
        .form-footer {
            text-align: center;
            margin-top: 36px;
            padding-top: 24px;
            border-top: 1px solid #e2e8f0;
            color: #718096;
            font-size: 14px;
        }
        
        .secure-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 14px;
            margin-top: 16px;
            box-shadow: 0 4px 12px rgba(72, 187, 120, 0.3);
        }
        
        .payment-icons {
            display: flex;
            justify-content: center;
            gap: 24px;
            margin-top: 20px;
        }
        
        .payment-icons i {
            font-size: 28px;
            color: #667eea;
            transition: all 0.3s ease;
        }
        
        .payment-icons i:hover {
            transform: translateY(-4px);
            color: #764ba2;
        }
        
        /* Animations */
        @keyframes floatIn {
            from { 
                opacity: 0; 
                transform: translateY(30px) scale(0.95); 
            }
            to { 
                opacity: 1; 
                transform: translateY(0) scale(1); 
            }
        }
        
        .order-form-container {
            animation: floatIn 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(102, 126, 234, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(102, 126, 234, 0); }
            100% { box-shadow: 0 0 0 0 rgba(102, 126, 234, 0); }
        }
        
        .submit-btn {
            animation: pulse 2s infinite;
        }
        
        /* Responsive Design */
        @media (max-width: 640px) {
            .order-form-container {
                padding: 32px 24px;
                border-radius: 20px;
            }
            
            .form-header h2 {
                font-size: 28px;
            }
            
            .form-icon {
                width: 72px;
                height: 72px;
            }
            
            .form-icon i {
                font-size: 32px;
            }
        }
        
        /* Dark mode support */
        @media (prefers-color-scheme: dark) {
            .order-form-container {
                background: rgba(26, 32, 44, 0.95);
                border-color: rgba(255, 255, 255, 0.1);
            }
            
            .form-header h2 {
                color: white;
            }
            
            .form-label, .form-header p, .form-footer {
                color: #cbd5e0;
            }
            
            .form-input {
                background-color: #2d3748;
                border-color: #4a5568;
                color: #e2e8f0;
            }
            
            .form-input:focus {
                background-color: #1a202c;
            }
        }
    </style>
</head>
<body>
    <form method="POST" action="/orders" class="order-form-container">
        @csrf
        
        <div class="form-header">
            <div class="form-icon">
                <i class="fas fa-shopping-cart"></i>
            </div>
            <h2>Create New Order</h2>
            <p>Enter your order details below</p>
        </div>
        
        <div class="form-group">
            <label class="form-label" for="amount">
                <i class="fas fa-dollar-sign"></i>
                Order Amount (USD)
            </label>
            <div class="input-with-icon">
                <span class="currency-icon">$</span>
                <input 
                    type="number" 
                    id="amount" 
                    name="amount" 
                    class="form-input amount-input" 
                    placeholder="e.g., 250" 
                    required
                    min="1"
                    step="0.01"
                >
            </div>
        </div>
        
        <div class="form-group">
            <label class="form-label" for="payment_method">
                <i class="fas fa-credit-card"></i>
                Payment Method
            </label>
            <div class="select-wrapper">
                <select id="payment_method" name="payment_method" class="form-input" required>
                    <option value="" disabled selected>Select payment method</option>
                    <option value="online">💳 Online Payment</option>
                    <option value="cash">💰 Cash on Delivery</option>
                </select>
            </div>
        </div>
        
        <button type="submit" class="submit-btn">
            <span>Complete Order</span>
            <i class="fas fa-arrow-right"></i>
        </button>
        
        <div class="form-footer">
            <div class="secure-badge">
                <i class="fas fa-lock"></i>
                <span>Secure SSL Encryption</span>
            </div>
            <p style="margin-top: 20px;">We accept all major payment methods</p>
            <div class="payment-icons">
                <i class="fab fa-cc-visa" title="Visa"></i>
                <i class="fab fa-cc-mastercard" title="Mastercard"></i>
                <i class="fab fa-cc-amex" title="American Express"></i>
                <i class="fab fa-cc-paypal" title="PayPal"></i>
                <i class="fab fa-cc-apple-pay" title="Apple Pay"></i>
            </div>
        </div>
    </form>
    
    <script>
        // Enhanced animations and interactions
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('.order-form-container');
            form.style.opacity = '0';
            form.style.transform = 'translateY(30px) scale(0.95)';
            
            setTimeout(() => {
                form.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
                form.style.opacity = '1';
                form.style.transform = 'translateY(0) scale(1)';
            }, 100);
            
            // Animate form inputs on focus
            const inputs = document.querySelectorAll('.form-input');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.style.transform = 'translateY(-2px)';
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.style.transform = 'translateY(0)';
                });
            });
            
            // Real-time amount formatting
            const amountInput = document.getElementById('amount');
            amountInput.addEventListener('input', function() {
                if(this.value) {
                    const value = parseFloat(this.value);
                    if(value >= 1000) {
                        this.style.borderColor = '#48bb78';
                        this.style.boxShadow = '0 0 0 3px rgba(72, 187, 120, 0.2)';
                    } else {
                        this.style.borderColor = '#667eea';
                        this.style.boxShadow = '0 0 0 4px rgba(102, 126, 234, 0.15)';
                    }
                }
            });
            
            // Payment method selection animation
            const paymentSelect = document.getElementById('payment_method');
            paymentSelect.addEventListener('change', function() {
                if(this.value) {
                    this.style.color = '#2d3748';
                    this.style.fontWeight = '600';
                    
                    // Add visual feedback
                    this.parentElement.style.transform = 'scale(1.02)';
                    setTimeout(() => {
                        this.parentElement.style.transform = 'scale(1)';
                    }, 200);
                }
            });
            
            // Enhanced form validation
            const formElement = document.querySelector('form');
            formElement.addEventListener('submit', function(e) {
                const amount = amountInput.value;
                const paymentMethod = paymentSelect.value;
                let isValid = true;
                
                // Clear previous errors
                document.querySelectorAll('.error-message').forEach(el => el.remove());
                document.querySelectorAll('.form-input').forEach(el => {
                    el.style.borderColor = '#e2e8f0';
                });
                
                if(!amount || amount < 1) {
                    showError(amountInput, 'Please enter a valid amount (minimum $1)');
                    isValid = false;
                }
                
                if(!paymentMethod) {
                    showError(paymentSelect, 'Please select a payment method');
                    isValid = false;
                }
                
                if(!isValid) {
                    e.preventDefault();
                    // Shake form animation
                    form.style.animation = 'none';
                    setTimeout(() => {
                        form.style.animation = 'shake 0.5s cubic-bezier(.36,.07,.19,.97) both';
                    }, 10);
                    
                    // Remove shake animation after it plays
                    setTimeout(() => {
                        form.style.animation = '';
                    }, 500);
                } else {
                    // Success animation
                    const submitBtn = document.querySelector('.submit-btn');
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i><span>Processing Order...</span>';
                    submitBtn.disabled = true;
                }
            });
            
            function showError(input, message) {
                input.style.borderColor = '#fc8181';
                input.style.boxShadow = '0 0 0 3px rgba(252, 129, 129, 0.2)';
                
                const errorDiv = document.createElement('div');
                errorDiv.className = 'error-message';
                errorDiv.style.color = '#fc8181';
                errorDiv.style.fontSize = '14px';
                errorDiv.style.marginTop = '8px';
                errorDiv.style.display = 'flex';
                errorDiv.style.alignItems = 'center';
                errorDiv.style.gap = '8px';
                errorDiv.innerHTML = `<i class="fas fa-exclamation-circle"></i> ${message}`;
                
                input.parentElement.appendChild(errorDiv);
            }
            
            // Add shake animation
            const style = document.createElement('style');
            style.textContent = `
                @keyframes shake {
                    10%, 90% { transform: translateX(-1px); }
                    20%, 80% { transform: translateX(2px); }
                    30%, 50%, 70% { transform: translateX(-4px); }
                    40%, 60% { transform: translateX(4px); }
                }
            `;
            document.head.appendChild(style);
        });
    </script>
</body>
</html>