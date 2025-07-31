import * as React from "react"
import { Slot } from "@radix-ui/react-slot"

interface ButtonVariants {
  variant?: 'default' | 'destructive' | 'outline' | 'secondary' | 'ghost' | 'link' | 'gradient' | 'accent';
  size?: 'default' | 'sm' | 'lg' | 'icon';
}

const getButtonClasses = ({ variant = 'default', size = 'default' }: ButtonVariants = {}) => {
  const baseClasses = 'btn-base';
  
  const variantClasses = {
    default: 'btn-default',
    destructive: 'btn-destructive',
    outline: 'btn-outline',
    secondary: 'btn-secondary',
    ghost: 'btn-ghost',
    link: 'btn-link',
    gradient: 'btn-gradient',
    accent: 'btn-accent',
  };
  
  const sizeClasses = {
    default: 'btn-default-size',
    sm: 'btn-sm',
    lg: 'btn-lg',
    icon: 'btn-icon',
  };
  
  return `${baseClasses} ${variantClasses[variant]} ${sizeClasses[size]}`;
};

export interface ButtonProps
  extends React.ButtonHTMLAttributes<HTMLButtonElement>,
    ButtonVariants {
  asChild?: boolean
}

const Button = React.forwardRef<HTMLButtonElement, ButtonProps>(
  ({ className, variant, size, asChild = false, ...props }, ref) => {
    const Comp = asChild ? Slot : "button"
    const buttonClasses = getButtonClasses({ variant, size });
    
    return (
      <Comp
        className={`${buttonClasses} ${className || ''}`}
        ref={ref}
        {...props}
      />
    )
  }
)
Button.displayName = "Button"

// Export for compatibility with other components
export const buttonVariants = getButtonClasses;

export { Button }
